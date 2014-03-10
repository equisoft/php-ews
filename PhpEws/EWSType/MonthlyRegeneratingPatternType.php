<?php
/**
 * Contains MonthlyRegeneratingPatternType.
 */

namespace PhpEws\EWSType;

/**
 * Describes the frequency, in months, of which task is regenerated.
 */
class MonthlyRegeneratingPatternType extends EWSType
{
    /**
     * Defines the interval, in months, between two consecutive recurring items.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Interval;
}
