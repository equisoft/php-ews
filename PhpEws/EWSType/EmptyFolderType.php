<?php
/**
 * Definition of the EmptyFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

class EmptyFolderType extends EWSType {

    /**
     * FolderIds property
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

}