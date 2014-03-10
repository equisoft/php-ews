<?php
/**
 * Definition of the SuggestionsResponseType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SuggestionsResponseType type
 */
class SuggestionsResponseType extends EWSType
{
    /**
     * ResponseMessage property
     *
     * @var ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * SuggestionDayResultArray property
     *
     * @var ArrayOfSuggestionDayResult
     */
    public $SuggestionDayResultArray;
}
