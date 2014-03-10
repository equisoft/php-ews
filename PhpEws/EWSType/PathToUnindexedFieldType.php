<?php
/**
 * Contains PathToUnindexedFieldType.
 */

namespace PhpEws\EWSType;

/**
 * Identifies frequently referenced properties by URI.
 */
class PathToUnindexedFieldType extends EWSType
{
    /**
     * Identifies the URI of the property.
     *
     * @since Exchnage 2007
     *
     * @var UnindexedFieldURIType
     */
    public $FieldURI;
}
