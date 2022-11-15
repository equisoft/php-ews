<?php
/**
 * Soap Client using Microsoft's NTLM Authentication.
 *
 * Copyright (c) 2008 Invest-In-France Agency http://www.invest-in-france.org
 *
 * Author : Thomas Rabaix
 *
 * Permission to use, copy, modify, and distribute this software for any
 * purpose with or without fee is hereby granted, provided that the above
 * copyright notice and this permission notice appear in all copies.
 *
 * THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES
 * WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR
 * ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES
 * WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN
 * ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF
 * OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.
 *
 * @link http://rabaix.net/en/articles/2008/03/13/using-soap-php-with-ntlm-authentication
 * @author Thomas Rabaix
 */

namespace PhpEws;

use CurlHandle;
use SoapClient;
use SoapHeader;

/**
 * Soap Client using Microsoft's NTLM Authentication.
 */
class NTLMSoapClient extends SoapClient
{
    /**
     * cURL resource used to make the SOAP request
     *
     * @var CurlHandle
     */
    protected $ch;

    /**
     * Whether or not to validate ssl certificates
     *
     * @var boolean
     */
    protected $validate = false;

    /**
     * Whether or not to check the existence of a common name in the SSL peer certificate
     *
     * @var int $verifyhost Boolean, accepts 2 (default), 1 (deprecated) or 0
     */
    protected $verifyhost = 2;

    /**
     * Username for authentication on the exchnage server
     *
     * @var string
     */
    protected $user;

    /**
     * Password for authentication on the exchnage server
     *
     * @var string
     */
    protected $password;

    protected $__last_request_headers;

    /**
     * An array of headers for us to store or use. Since not all requests use all headers (DeleteItem and SyncItems
     * don't allow you to pass a Timezone for example), we need to be able to smartly decide what headers to include
     * and exclude from a request. Until we have propper selection (an array of all known operations and what headers
     * are allowed for example), this seems like a decent solution for storing the headers before we decide if they
     * belong in the request or not)
     *
     * @var array
     */
    protected $ewsHeaders = array(
        'version' => null,
        'impersonation' => null,
        'timezone' => null
    );

    /**
     * Constructor
     *
     * @param string $wsdl
     * @param array $options
     */
    public function __construct($wsdl, $options)
    {
        // Verify that a user name and password were entered.
        if (empty($options['user']) || empty($options['password'])) {
            throw new EWSException('A username and password is required.');
        }

        // Set the username and password properties.
        $this->user = $options['user'];
        $this->password = $options['password'];


        // If a version was set then add it to the headers.
        if (!empty($options['version'])) {
            $this->ewsHeaders['version'] = new SoapHeader(
                'http://schemas.microsoft.com/exchange/services/2006/types',
                'RequestServerVersion Version="'.$options['version'].'"'
            );
        }

        // If impersonation was set then add it to the headers.
        if (!empty($options['impersonation'])) {
            $this->ewsHeaders['impersonation'] = new SoapHeader(
                'http://schemas.microsoft.com/exchange/services/2006/types',
                'ExchangeImpersonation',
                $options['impersonation']
            );
        }

        parent::__construct($wsdl, $options);
    }

    #[\ReturnTypeWillChange]
    public function __call($name, $args)
    {
        $this->__setSoapHeaders(null);

        $headers = array(
            $this->ewsHeaders['version'],
            $this->ewsHeaders['impersonation'],
        );

        $headers = array_filter($headers, function ($header) {
            return $header instanceof SoapHeader;
        });

        $this->__setSoapHeaders($headers);
        return parent::__call($name, $args);
    }

    /**
     * Returns the response code from the last request
     *
     * @return integer
     */
    public function getResponseCode()
    {
        return curl_getinfo($this->ch, CURLINFO_HTTP_CODE);
    }

    public function __doRequest(
        string $request,
        string $location,
        string $action,
        int $version,
        bool $oneWay = false
    ): ?string {
        $headers = array(
            'Method: POST',
            'Connection: Keep-Alive',
            'User-Agent: PHP-SOAP-CURL',
            'Content-Type: text/xml; charset=utf-8',
            'SOAPAction: "'.$action.'"',
        );

        $this->__last_request_headers = $headers;
        $this->ch = curl_init($location);

        curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, $this->validate);
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYHOST, $this->validate ? $this->verifyhost : 0);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($this->ch, CURLOPT_POST, true );
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $request);
        curl_setopt($this->ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($this->ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC | CURLAUTH_NTLM);

        curl_setopt($this->ch, CURLOPT_USERPWD, $this->user.':'. $this->password);


        $response = curl_exec($this->ch);

        if ($response === false) {
            throw new EWSException(
              'Curl error: ' . curl_error($this->ch),
              curl_errno($this->ch)
            );
        }

        return (string)$response;
    }

    /**
     * Returns last SOAP request headers
     *
     * @link http://php.net/manual/en/function.soap-soapclient-getlastrequestheaders.php
     *
     * @return string the last soap request headers
     */
    #[\ReturnTypeWillChange]
    public function __getLastRequestHeaders()
    {
        return implode('n', $this->__last_request_headers)."\n";
    }

    /**
     * Sets whether or not to validate ssl certificates
     *
     * @param boolean $validate
     */
    public function validateCertificate($validate = true)
    {
        $this->validate = $validate;

        return true;
    }

    /**
     * Sets whether or not to check the existence of a common name in the SSL peer certificate
     *
     * @param int $verifyhost Boolean, accepts 2 (default), 1 (deprecated) or 0
     */
    public function setVerifyHost($verifyhost = 2)
    {
        if (!$verifyhost) {
            $this->verifyhost = 0;
        }
        elseif ($verifyhost !== 2) {
            $this->verifyhost = 1; // deprecated
        }
        else {
            $this->verifyhost = 2; // recommend
        }

        return true;
    }
}
