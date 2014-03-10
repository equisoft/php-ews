<?php
/**
 * Definition of the ItemChangeType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ItemChangeType type
 */
class ItemChangeType extends EWSType
{
    /**
     * ItemId property
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * OccurrenceItemId property
     *
     * @var OccurrenceItemIdType
     */
    public $OccurrenceItemId;

    /**
     * RecurringMasterItemId property
     *
     * @var RecurringMasterItemIdType
     */
    public $RecurringMasterItemId;

    /**
     * Updates property
     *
     * @var NonEmptyArrayOfItemChangeDescriptionsType
     */
    public $Updates;
}
