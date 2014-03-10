<?php
/**
 * Contains ArrayOfBinaryType.
 */

namespace PhpEws\EWSType;

/**
 * Represents a value that encodes a contact's certificate.
 */
class ArrayOfBinaryType extends EWSType
{
    /**
     * Contains a Base64-encoded value.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     *
     * @todo Create a base64 class?
     */
    public $Base64Binary;
}
