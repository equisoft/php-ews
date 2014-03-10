<?php
/**
 * Definition of the GetFolderType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GetFolderType type
 */
class GetFolderType extends EWSType
{
    /**
     * FolderShape property
     *
     * @var FolderResponseShapeType
     */
    public $FolderShape;

    /**
     * FolderIds property
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
}
