<?php
/**
 * Definition of the FreeBusyResponseType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the FreeBusyResponseType type
 */
class FreeBusyResponseType extends EWSType
{
    /**
     * ResponseMessage property
     *
     * @var ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * FreeBusyView property
     *
     * @var FreeBusyView
     */
    public $FreeBusyView;
}
