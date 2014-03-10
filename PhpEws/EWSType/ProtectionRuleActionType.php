<?php
/**
 * Contains ProtectionRuleActionType.
 */

namespace PhpEws\EWSType;

/**
 * Identifies what action must be executed if the condition part of a rule
 * passes.
 */
class ProtectionRuleActionType extends EWSType
{
    /**
     * Identifies the name of the action.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Name;

    /**
     * Specifies arguments to the action.
     *
     * This property should be left empty if the specified action does not
     * require arguments to be specified. This property can include one or more
     * values if an action requires one or more arguments. The
     * RightsProtectMessage action will contain a single argument.
     *
     * @since Exchange 2010
     *
     * @var ProtectionRuleArgumentType
     */
    public $Argument;
}
