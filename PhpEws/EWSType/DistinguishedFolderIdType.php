<?php
/**
 * Definition of the DistinguishedFolderIdType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the DistinguishedFolderIdType type
 */
class DistinguishedFolderIdType extends EWSType
{
    /**
     * Mailbox property
     *
     * @var EmailAddressType
     */
    public $Mailbox;

    /**
     * Id property
     *
     * @var DistinguishedFolderIdNameType
     */
    public $Id;

    /**
     * ChangeKey property
     *
     * @var string
     */
    public $ChangeKey;
}
