<?php
/**
 * Definition of the TwoOperandExpressionType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the TwoOperandExpressionType type
 */
class TwoOperandExpressionType extends EWSType
{
    /**
     * Path property
     *
     * @var BasePathToElementType
     */
    public $Path;

    /**
     * FieldURIOrConstant property
     *
     * @var FieldURIOrConstantType
     */
    public $FieldURIOrConstant;
}
