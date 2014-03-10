<?php
/**
 * Definition of the OccurrenceItemIdType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the OccurrenceItemIdType type
 */
class OccurrenceItemIdType extends EWSType
{
    /**
     * RecurringMasterId property
     *
     * @var DerivedItemIdType
     */
    public $RecurringMasterId;

    /**
     * ChangeKey property
     *
     * @var string
     */
    public $ChangeKey;

    /**
     * InstanceIndex property
     *
     * @var integer
     */
    public $InstanceIndex;
}
