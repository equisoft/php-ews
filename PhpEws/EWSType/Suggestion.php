<?php
/**
 * Definition of the Suggestion type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the Suggestion type
 */
class Suggestion extends EWSType
{
    /**
     * MeetingTime property
     *
     * @var dateTime
     */
    public $MeetingTime;

    /**
     * IsWorkTime property
     *
     * @var boolean
     */
    public $IsWorkTime;

    /**
     * SuggestionQuality property
     *
     * @var SuggestionQuality
     */
    public $SuggestionQuality;

    /**
     * AttendeeConflictDataArray property
     *
     * @var ArrayOfAttendeeConflictData
     */
    public $AttendeeConflictDataArray;
}
