<?php
/**
 * Contains DelegateUserType.
 */

namespace PhpEws\EWSType;

/**
 * Identifies a single delegate to add or update in a mailbox or a delegate
 * returned in a delegate management response.
 *
 * @package php-ews\Types
 */
class DelegateUserType extends EWSType
{
    /**
     * Identifies the delegate.
     *
     * @since Exchnage 2007 SP1
     *
     * @var UserIdType
     */
    public $UserId;

    /**
     * Contains the delegate permission level settings.
     *
     * @since Exchnage 2007 SP1
     *
     * @var DelegatePermissionsType
     */
    public $DelegatePermissions;

    /**
     * Indicates whether a delegate receives copies of meeting-related messages
     * that are addressed to the principal.
     *
     * @since Exchnage 2007 SP1
     *
     * @var boolean
     */
    public $ReceiveCopiesOfMeetingMessages;

    /**
     * Indicates whether a delegate has permission to view private calendar
     * items in the principal's mailbox.
     *
     * @since Exchnage 2007 SP1
     *
     * @var boolean
     */
    public $ViewPrivateItems;
}
