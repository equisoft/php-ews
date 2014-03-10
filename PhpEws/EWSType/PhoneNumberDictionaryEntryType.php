<?php
/**
 * Contains PhoneNumberDictionaryEntryType.
 */

namespace PhpEws\EWSType;

/**
 * Definition of the PhoneNumberDictionaryEntryType type
 *
 * @package php-ews\Types
 */
class PhoneNumberDictionaryEntryType extends EWSType
{
    /**
     * Value that represents the telephone number.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $_;

    /**
     * Identifies the telephone number.
     *
     * @since Exchange 2007
     *
     * @var PhoneNumberKeyType
     */
    public $Key;
}
