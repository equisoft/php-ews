<?php
/**
 * Contains NonEmptyArrayOfDeletedOccurrencesType.
 */

namespace PhpEws\EWSType;

/**
 * Represents an array of deleted occurrences of a recurring calendar item.
 *
 * @package php-ews\Types
 */
class NonEmptyArrayOfDeletedOccurrencesType extends EWSType
{
    /**
     * Represents a deleted occurrence of a recurring calendar item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_DeletedOccurrenceInfoType
     */
    public $DeletedOccurrence;
}
