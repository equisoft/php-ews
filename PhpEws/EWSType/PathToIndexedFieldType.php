<?php
/**
 * Contains PathToIndexedFieldType.
 */

namespace PhpEws\EWSType;

/**
 * Identifies individual members of a dictionary.
 */
class PathToIndexedFieldType extends EWSType
{
    /**
     * Identifies the member of the dictionary to return.
     *
     * This attribute is required.
     *
     * @since Exchnage 2007
     *
     * @var string
     */
    public $FieldIndex;

    /**
     * FieldURI property
     *
     * @since Exchnage 2007
     *
     * @var DictionaryURIType
     */
    public $FieldURI;
}
