<?php
/**
 * The SearchExpression element is an abstract element that represents the
 * substituted element within a restriction. All search expressions derive from
 * this base type. This element is not used in an XML instance document.
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SearchExpressionType type.
 */
abstract class SearchExpressionType extends EWSType
{
    /**
     * Identifies frequently referenced properties by URI.
     *
     * @var PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Identifies MAPI properties.
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;
}
