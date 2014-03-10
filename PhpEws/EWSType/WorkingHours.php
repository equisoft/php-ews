<?php
/**
 * Definition of the WorkingHours type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the WorkingHours type
 */
class WorkingHours extends EWSType
{
    /**
     * TimeZone property
     *
     * @var SerializableTimeZone
     */
    public $TimeZone;

    /**
     * WorkingPeriodArray property
     *
     * @var ArrayOfWorkingPeriod
     */
    public $WorkingPeriodArray;
}
