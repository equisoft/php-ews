<?php
/**
 * Definition of the MovedCopiedEventType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the MovedCopiedEventType type
 */
class MovedCopiedEventType extends EWSType
{
    /**
     * OldFolderId property
     *
     * @var FolderIdType
     */
    public $OldFolderId;

    /**
     * OldItemId property
     *
     * @var ItemIdType
     */
    public $OldItemId;

    /**
     * OldParentFolderId property
     *
     * @var FolderIdType
     */
    public $OldParentFolderId;
}
