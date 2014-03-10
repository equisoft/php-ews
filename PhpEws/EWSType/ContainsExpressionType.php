<?php
/**
 * Contains ContainsExpressionType.
 */

namespace PhpEws\EWSType;

/**
 * Represents a search expression that determines whether a given property
 * contains the supplied constant string value.
 */
class ContainsExpressionType extends EWSType
{
    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @since Exchange 2007
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Identifies MAPI properties.
     *
     * @since Exchange 2007
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies a constant value in a restriction.
     *
     * @since Exchange 2007
     *
     * @var ConstantValueType
     */
    public $Constant;

    /**
     * Identifies the boundaries of a search.
     *
     * @since Exchange 2007
     *
     * @var ContainmentModeType
     */
    public $ContainmentMode;

    /**
     * Determines whether the search ignores cases and spaces.
     *
     * @since Exchange 2007
     *
     * @var ContainmentComparisonType
     */
    public $ContainmentComparison;
}
