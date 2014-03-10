<?php
/**
 * Definition of the EmailAddress type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the EmailAddress type
 */
class EmailAddress extends EWSType
{
    /**
     * Name property
     *
     * @var string
     */
    public $Name;

    /**
     * Address property
     *
     * @var string
     */
    public $Address;

    /**
     * RoutingType property
     *
     * @var string
     */
    public $RoutingType;
}
