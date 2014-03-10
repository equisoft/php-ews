<?php
/**
 * Definition of the CalendarEvent type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the CalendarEvent type
 */
class CalendarEvent extends EWSType
{
    /**
     * Start date and time of the event in ISO 8601 format.
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $Start;

    /**
     * End date and time of the event in ISO 8601 format.
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $End;

    /**
     * BusyType property
     *
     * @var LegacyFreeBusyType
     */
    public $BusyType;

    /**
     * CalendarEventDetails property
     *
     * @var CalendarEventDetails
     */
    public $CalendarEventDetails;
}
