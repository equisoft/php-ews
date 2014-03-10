<?php
/**
 * Definition of the GroupByType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GroupByType type
 */
class GroupByType extends EWSType
{
    /**
     * FieldURI property
     *
     * @var PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * IndexedFieldURI property
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * ExtendedFieldURI property
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * AggregateOn property
     *
     * @var AggregateOnType
     */
    public $AggregateOn;

    /**
     * Order property
     *
     * @var SortDirectionType
     */
    public $Order;
}
