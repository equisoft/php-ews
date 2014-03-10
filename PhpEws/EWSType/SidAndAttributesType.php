<?php
/**
 * Definition of the SidAndAttributesType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SidAndAttributesType type
 */
class SidAndAttributesType extends EWSType
{
    /**
     * SecurityIdentifier property
     *
     * @var string
     */
    public $SecurityIdentifier;

    /**
     * Attributes property
     *
     * @var unsignedInt
     */
    public $Attributes;
}
