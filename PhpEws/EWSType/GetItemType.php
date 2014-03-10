<?php
/**
 * Definition of the GetItemType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GetItemType type
 */
class GetItemType extends EWSType
{
    /**
     * ItemShape property
     *
     * @var ItemResponseShapeType
     */
    public $ItemShape;

    /**
     * ItemIds property
     *
     * @var NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
}
