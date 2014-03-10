<?php
/**
 * Definition of the SearchParametersType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SearchParametersType type
 */
class SearchParametersType extends EWSType
{
    /**
     * Restriction property
     *
     * @var RestrictionType
     */
    public $Restriction;

    /**
     * BaseFolderIds property
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $BaseFolderIds;

    /**
     * Traversal property
     *
     * @var SearchFolderTraversalType
     */
    public $Traversal;
}
