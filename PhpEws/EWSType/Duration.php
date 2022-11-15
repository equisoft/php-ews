<?php
/**
 * Definition of the Duration type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the Duration type
 */
class Duration extends EWSType
{
    /**
     * StartTime property
     *
     * @var string dateTime
     *
     * @todo Make a DateTime object.
     */
    public $StartTime;

    /**
     * EndTime property
     *
     * @var string dateTime
     *
     * @todo Make a DateTime object.
     */
    public $EndTime;
}
