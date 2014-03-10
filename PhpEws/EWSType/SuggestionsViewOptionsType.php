<?php
/**
 * Definition of the SuggestionsViewOptionsType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SuggestionsViewOptionsType type
 */
class SuggestionsViewOptionsType extends EWSType
{
    /**
     * GoodThreshold property
     *
     * @var integer
     */
    public $GoodThreshold;

    /**
     * MaximumResultsByDay property
     *
     * @var integer
     */
    public $MaximumResultsByDay;

    /**
     * MaximumNonWorkHourResultsByDay property
     *
     * @var integer
     */
    public $MaximumNonWorkHourResultsByDay;

    /**
     * MeetingDurationInMinutes property
     *
     * @var integer
     */
    public $MeetingDurationInMinutes;

    /**
     * MinimumSuggestionQuality property
     *
     * @var SuggestionQuality
     */
    public $MinimumSuggestionQuality;

    /**
     * DetailedSuggestionsWindow property
     *
     * @var Duration
     */
    public $DetailedSuggestionsWindow;

    /**
     * CurrentMeetingTime property
     *
     * @var dateTime
     */
    public $CurrentMeetingTime;

    /**
     * GlobalObjectId property
     *
     * @var string
     */
    public $GlobalObjectId;
}
