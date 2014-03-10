<?php
/**
 * Contains WeeklyRecurrencePatternType.
 */

namespace PhpEws\EWSType;

/**
 * Describes a weekly recurrence pattern.
 *
 * @package php-ews\Types
 */
class WeeklyRecurrencePatternType extends EWSType
{
    /**
     * Describes which days of the week are in the weekly recurrence pattern.
     *
     * @since Exchange 2007
     *
     * @var DaysOfWeekType
     */
    public $DaysOfWeek;

    /**
     * Specifies the first day of the week.
     *
     * @since Exchange 2010
     *
     * @var DayOfWeekType
     */
    public $FirstDayOfWeek;

    /**
     * Defines the interval, in weeks, between two consecutive weekly recurrence
     * pattern items.
     *
     * The value can be in the range from 1 to 99.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Interval;
}
