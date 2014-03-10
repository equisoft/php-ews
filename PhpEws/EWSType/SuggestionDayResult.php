<?php
/**
 * Definition of the SuggestionDayResult type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SuggestionDayResult type
 */
class SuggestionDayResult extends EWSType
{
    /**
     * Date property
     *
     * @var dateTime
     */
    public $Date;

    /**
     * DayQuality property
     *
     * @var SuggestionQuality
     */
    public $DayQuality;

    /**
     * SuggestionArray property
     *
     * @var ArrayOfSuggestion
     */
    public $SuggestionArray;
}
