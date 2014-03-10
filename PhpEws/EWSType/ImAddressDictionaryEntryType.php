<?php
/**
 * Contains ImAddressDictionaryEntryType.
 */

namespace PhpEws\EWSType;

/**
 * Represents an instant messaging (IM) address for a contact.
 */
class ImAddressDictionaryEntryType extends EWSType
{
    /**
     * Represents the IM address.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $_;

    /**
     * Identifies the IM address.
     *
     * @since Exchange 2007
     *
     * @var ImAddressKeyType
     */
    public $Key;
}
