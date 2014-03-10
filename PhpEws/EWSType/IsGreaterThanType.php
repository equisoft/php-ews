<?php
/**
 * Contains IsGreaterThanType.
 */

namespace PhpEws\EWSType;

/**
 * Represents a search expression that compares a property with either a
 * constant value or another property and returns true if the first property is
 * greater.
 */
class IsGreaterThanType extends EWSType
{
    /**
     * Identifies MAPI properties.
     *
     * @since Exchnage 2007
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchnage 2007
     *
     * @var PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Represents either a property or a constant value to be used when
     * comparing with another property.
     *
     * @since Exchnage 2007
     *
     * @var FieldURIOrConstantType
     */
    public $FieldURIOrConstant;

    /**
     * Identifies individual members of a dictionary.
     *
     * @since Exchnage 2007
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;
}
