<?php
/**
 * Definition of the PermissionType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the PermissionType type
 */
class PermissionType extends EWSType
{
    /**
     * ReadItems property
     *
     * @var PermissionReadAccessType
     */
    public $ReadItems;

    /**
     * PermissionLevel property
     *
     * @var PermissionLevelType
     */
    public $PermissionLevel;
}
