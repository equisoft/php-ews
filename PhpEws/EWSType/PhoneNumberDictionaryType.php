<?php
/**
 * Contains PhoneNumberDictionaryType.
 */

namespace PhpEws\EWSType;

/**
 * Represents a collection of telephone numbers for a contact.
 */
class PhoneNumberDictionaryType extends EWSType
{
    /**
     * Represents a telephone number for a contact.
     *
     * @since Exchange 2007
     *
     * @var PhoneNumberDictionaryEntryType
     */
    public $Entry;
}
