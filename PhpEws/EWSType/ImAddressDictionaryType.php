<?php
/**
 * Contains ImAddressDictionaryType.
 */

namespace PhpEws\EWSType;

/**
 * Represents a collection of instant messaging addresses for a contact.
 *
 * @package php-ews\Types
 */
class ImAddressDictionaryType extends EWSType
{
    /**
     * Represents an instant messaging address for a contact.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ImAddressDictionaryEntryType
     */
    public $Entry;
}
