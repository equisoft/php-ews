<?php
/**
 * Definition of the NonEmptyArrayOfFolderChangeDescriptionsType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfFolderChangeDescriptionsType type
 */
class NonEmptyArrayOfFolderChangeDescriptionsType extends EWSType
{
    /**
     * AppendToFolderField property
     *
     * @var AppendToFolderFieldType
     */
    public $AppendToFolderField;

    /**
     * SetFolderField property
     *
     * @var SetFolderFieldType
     */
    public $SetFolderField;

    /**
     * DeleteFolderField property
     *
     * @var DeleteFolderFieldType
     */
    public $DeleteFolderField;
}
