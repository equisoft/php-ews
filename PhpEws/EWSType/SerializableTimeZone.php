<?php
/**
 * Definition of the SerializableTimeZone type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SerializableTimeZone type
 */
class SerializableTimeZone extends EWSType
{
    /**
     * Bias property
     *
     * @var integer
     */
    public $Bias;

    /**
     * StandardTime property
     *
     * @var SerializableTimeZoneTime
     */
    public $StandardTime;

    /**
     * DaylightTime property
     *
     * @var SerializableTimeZoneTime
     */
    public $DaylightTime;
}
