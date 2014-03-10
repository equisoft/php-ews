<?php
/**
 * Contains ArrayOfDelegateUserResponseMessageType.
 */

namespace PhpEws\EWSType;

/**
 * Contains the response messages for an Exchange Web Services delegate
 * management request.
 *
 * @package php-ews\Types
 */
class ArrayOfDelegateUserResponseMessageType extends EWSType
{
    /**
     * Contains response messages for delegate management operations.
     *
     * @since Exchnage 2007 SP1
     *
     * @var DelegateUserResponseMessageType
     */
    public $DelegateUserResponseMessageType;
}
