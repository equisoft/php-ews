<?php
/**
 * Definition of the GetUserOofSettingsResponse type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GetUserOofSettingsResponse type
 */
class GetUserOofSettingsResponse extends EWSType
{
    /**
     * ResponseMessage property
     *
     * @var ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * OofSettings property
     *
     * @var UserOofSettings
     */
    public $OofSettings;

    /**
     * AllowExternalOof property
     *
     * @var ExternalAudience
     */
    public $AllowExternalOof;
}
