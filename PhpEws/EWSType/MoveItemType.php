<?php
/**
 * Definition of the MoveItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the MoveItemType type
 */
class MoveItemType extends EWSType
{
    /**
     * DistinguishedFolderId property
     *
     * @var EWSType_DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;

    /**
     * ItemIds property
     *
     * @var EWSType_NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * ToFolderId property
     *
     * @var EWSType_TargetFolderIdType
     */
    public $ToFolderId;
}
