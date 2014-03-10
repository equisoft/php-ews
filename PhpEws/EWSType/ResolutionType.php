<?php
/**
 * Definition of the ResolutionType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ResolutionType type
 */
class ResolutionType extends EWSType
{
    /**
     * Mailbox property
     *
     * @var EmailAddressType
     */
    public $Mailbox;

    /**
     * Contact property
     *
     * @var ContactItemType
     */
    public $Contact;
}
