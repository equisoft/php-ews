<?php
/**
 * Definition of the NonEmptyArrayOfItemChangeDescriptionsType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfItemChangeDescriptionsType type
 */
class NonEmptyArrayOfItemChangeDescriptionsType extends EWSType
{
    /**
     * AppendToItemField property
     *
     * @var AppendToItemFieldType
     */
    public $AppendToItemField;

    /**
     * SetItemField property
     *
     * @var SetItemFieldType
     */
    public $SetItemField;

    /**
     * DeleteItemField property
     *
     * @var DeleteItemFieldType
     */
    public $DeleteItemField;
}
