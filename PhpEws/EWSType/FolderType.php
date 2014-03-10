<?php
/**
 * Definition of the FolderType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the FolderType type
 */
class FolderType extends EWSType
{
    /**
     * PermissionSet property
     *
     * @var PermissionSetType
     */
    public $PermissionSet;

    /**
     * UnreadCount property
     *
     * @var integer
     */
    public $UnreadCount;
}
