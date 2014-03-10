<?php
/**
 * Contains ArrayOfEmailAddressesType.
 */

namespace PhpEws\EWSType;

/**
 * Specifies an array of all email addresses of an associated persona.
 *
 * @package php-ews\Types
 */
class ArrayOfEmailAddressesType extends EWSType
{
    /**
     * Represents a fully resolved e-mail address.
     *
     * @since Exchnage 2010 SP1
     *
     * @var EmailAddressType
     */
    public $Address;
}
