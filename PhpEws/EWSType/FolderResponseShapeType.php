<?php
/**
 * Definition of the FolderResponseShapeType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the FolderResponseShapeType type
 */
class FolderResponseShapeType extends EWSType
{
    /**
     * BaseShape property
     *
     * @var DefaultShapeNamesType
     */
    public $BaseShape;

    /**
     * AdditionalProperties property
     *
     * @var NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;
}
