<?php
/**
 * Contains RelativeYearlyRecurrencePatternType.
 */

namespace PhpEws\EWSType;

/**
 * Describes a relative yearly recurrence pattern.
 *
 * @package php-ews\Types
 */
class RelativeYearlyRecurrencePatternType extends EWSType
{
    /**
     * Describes the days of the week that are used in item recurrence patterns.
     *
     * @since Exchange 2007
     *
     * @var EWSType_DayOfWeekType
     */
    public $DaysOfWeek;

    /**
     * Describes which week in a month is used in a relative yearly recurrence
     * pattern.
     *
     * @since Exchange 2007
     *
     * @var EWSType_DayOfWeekIndexType
     */
    public $DayOfWeekIndex;

    /**
     * Describes the month when a yearly recurring item occurs.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MonthNamesType
     */
    public $Month;
}
