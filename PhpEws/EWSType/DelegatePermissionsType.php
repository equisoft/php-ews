<?php
/**
 * Contains DelegatePermissionsType.
 */

namespace PhpEws\EWSType;

/**
 * Contains the delegate permission-level settings for a user.
 */
class DelegatePermissionsType extends EWSType
{
    /**
     * Contains the permissions for the default Calendar folder.
     *
     * @since Exchnage 2007 SP1
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $CalendarFolderPermissionLevel;

    /**
     * Contains the permissions for the default Task folder.
     *
     * @since Exchnage 2007 SP1
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $TasksFolderPermissionLevel;

    /**
     * Contains the permissions for the default Inbox folder.
     *
     * @since Exchnage 2007 SP1
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $InboxFolderPermissionLevel;

    /**
     * Contains the permissions for the default Contacts folder.
     *
     * @since Exchnage 2007 SP1
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $ContactsFolderPermissionLevel;

    /**
     * Contains the permissions for the default Notes folder.
     *
     * @since Exchnage 2007 SP1
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $NotesFolderPermissionLevel;

    /**
     * Contains the permissions for the default Journal folder.
     *
     * @since Exchnage 2007 SP1
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $JournalFolderPermissionLevel;
}
