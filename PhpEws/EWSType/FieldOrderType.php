<?php
/**
 * Definition of the FieldOrderType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the FieldOrderType type
 */
class FieldOrderType extends EWSType
{
    /**
     * Path property
     *
     * @var BasePathToElementType
     */
    public $Path;

    /**
     * Order property
     *
     * @var SortDirectionType
     */
    public $Order;
}
