<?php
/**
 * Definition of the DeleteItemType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the DeleteItemType type
 */
class DeleteItemType extends EWSType
{
    /**
     * ItemIds property
     *
     * @var NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * DeleteType property
     *
     * @var DisposalType
     */
    public $DeleteType;

    /**
     * SendMeetingCancellations property
     *
     * @var CalendarItemCreateOrDeleteOperationType
     */
    public $SendMeetingCancellations;

    /**
     * AffectedTaskOccurrences property
     *
     * @var AffectedTaskOccurrencesType
     */
    public $AffectedTaskOccurrences;
}
