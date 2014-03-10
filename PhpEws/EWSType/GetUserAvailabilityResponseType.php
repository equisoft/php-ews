<?php
/**
 * Definition of the GetUserAvailabilityResponseType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GetUserAvailabilityResponseType type
 */
class GetUserAvailabilityResponseType extends EWSType
{
    /**
     * FreeBusyResponseArray property
     *
     * @var ArrayOfFreeBusyResponse
     */
    public $FreeBusyResponseArray;

    /**
     * SuggestionsResponse property
     *
     * @var SuggestionsResponseType
     */
    public $SuggestionsResponse;
}
