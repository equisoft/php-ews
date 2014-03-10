<?php
/**
 * Contains NonEmptyArrayOfAttendeesType.
 */

namespace PhpEws\EWSType;

/**
 * Represents attendees who are not required to attend a meeting.
 */
class NonEmptyArrayOfAttendeesType extends EWSType
{
    /**
     * Attendee property
     *
     * @since Exchange 2007
     *
     * @var AttendeeType
     */
    public $Attendee;
}
