<?php
/**
 * Definition of the ConvertIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ConvertIdType type
 */
class ConvertIdType extends EWSType
{
    /**
     * SourceIds property
     *
     * @var NonEmptyArrayOfAlternateIdsType
     */
    public $SourceIds;

    /**
     * DestinationFormat property
     *
     * @var IdFormatType
     */
    public $DestinationFormat;
}
