<?php
/**
 * Definition of the UpdateItemType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the UpdateItemType type
 */
class UpdateItemType extends EWSType
{
    /**
     * SavedItemFolderId property
     *
     * @var TargetFolderIdType
     */
    public $SavedItemFolderId;

    /**
     * ItemChanges property
     *
     * @var NonEmptyArrayOfItemChangesType
     */
    public $ItemChanges;

    /**
     * ConflictResolution property
     *
     * @var ConflictResolutionType
     */
    public $ConflictResolution;

    /**
     * MessageDisposition property
     *
     * @var MessageDispositionType
     */
    public $MessageDisposition;

    /**
     * SendMeetingInvitationsOrCancellations property
     *
     * @var CalendarItemUpdateOperationType
     */
    public $SendMeetingInvitationsOrCancellations;
}
