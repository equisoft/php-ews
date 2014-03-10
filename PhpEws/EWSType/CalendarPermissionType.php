<?php
/**
 * Definition of the CalendarPermissionType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the CalendarPermissionType type
 */
class CalendarPermissionType extends EWSType
{
    /**
     * ReadItems property
     *
     * @var CalendarPermissionReadAccessType
     */
    public $ReadItems;

    /**
     * CalendarPermissionLevel property
     *
     * @var CalendarPermissionLevelType
     */
    public $CalendarPermissionLevel;
}
