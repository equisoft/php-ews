<?php
/**
 * Definition of the BaseObjectChangedEventType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the BaseObjectChangedEventType type
 */
class BaseObjectChangedEventType extends EWSType
{
    /**
     * TimeStamp property
     *
     * @var string dateTime
     */
    public $TimeStamp;

    /**
     * FolderId property
     *
     * @var FolderIdType
     */
    public $FolderId;

    /**
     * ItemId property
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * ParentFolderId property
     *
     * @var FolderIdType
     */
    public $ParentFolderId;
}
