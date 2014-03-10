<?php
/**
 * Contains NonEmptyArrayOfPropertyValuesType.
 */

namespace PhpEws\EWSType;

/**
 * Represents a collection of values for an extended property.
 *
 * @package php-ews\Types
 */
class NonEmptyArrayOfPropertyValuesType extends EWSType
{
    /**
     * Contains a value of an extended property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Value;
}
