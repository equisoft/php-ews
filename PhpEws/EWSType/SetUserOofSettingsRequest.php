<?php
/**
 * Definition of the SetUserOofSettingsRequest type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SetUserOofSettingsRequest type
 */
class SetUserOofSettingsRequest extends EWSType
{
    /**
     * Mailbox property
     *
     * @var EmailAddress
     */
    public $Mailbox;

    /**
     * UserOofSettings property
     *
     * @var UserOofSettings
     */
    public $UserOofSettings;
}
