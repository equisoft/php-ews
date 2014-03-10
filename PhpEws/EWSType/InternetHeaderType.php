<?php
/**
 * Contains InternetHeaderType.
 */

namespace PhpEws\EWSType;

/**
 * Represents the Internet message header for a given header within a headers
 * collection.
 */
class InternetHeaderType extends EWSType
{
    /**
     * The value of the header.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $_;

    /**
     * Identifies the header name.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $HeaderName;
}
