<?php
/**
 * Contains ConstantValueType.
 */

namespace PhpEws\EWSType;

/**
 * Identifies a constant value in a restriction.
 */
class ConstantValueType extends EWSType
{
    /**
     * Specifies the value to compare in the restriction.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Value;
}
