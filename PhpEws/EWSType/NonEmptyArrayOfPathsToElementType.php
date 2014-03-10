<?php
/**
 * Contains NonEmptyArrayOfPathsToElementType.
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfPathsToElementType type
 */
class NonEmptyArrayOfPathsToElementType extends EWSType
{
    /**
     * Identifies extended MAPI properties to get, set, or create.
     *
     * @since Exchange 2007
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies frequently referenced dictionary properties by URI.
     *
     * @since Exchange 2007
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;
}
