<?php
/**
 * Definition of the GroupedItemsType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GroupedItemsType type
 */
class GroupedItemsType extends EWSType
{
    /**
     * GroupIndex property
     *
     * @var string
     */
    public $GroupIndex;

    /**
     * Items property
     *
     * @var ArrayOfRealItemsType
     */
    public $Items;
}
