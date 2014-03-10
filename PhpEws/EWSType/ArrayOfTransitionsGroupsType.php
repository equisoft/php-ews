<?php
/**
 * Contains ArrayOfTransitionsGroupsType.
 */

namespace PhpEws\EWSType;

/**
 * Represents an array of time zone transition groups.
 */
class ArrayOfTransitionsGroupsType extends EWSType
{
    /**
     * Represents an array of time zone transitions.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfTransitionsType
     */
    public $TransitionsGroup;
}
