<?php
/**
 * Definition of the ResponseMessageType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ResponseMessageType type
 */
class ResponseMessageType extends EWSType
{
    /**
     * MessageText property
     *
     * @var string
     */
    public $MessageText;

    /**
     * ResponseCode property
     *
     * @var ResponseCodeType
     */
    public $ResponseCode;

    /**
     * DescriptiveLinkKey property
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * MessageXml property
     *
     * @var MessageXml
     */
    public $MessageXml;

    /**
     * ResponseClass property
     *
     * @var ResponseClassType
     */
    public $ResponseClass;
}
