<?php
/**
 * Contains AddDelegateType.
 */

namespace PhpEws\EWSType;

/**
 * Defines a request to add delegates to a mailbox.
 *
 * @package php-ews\Types
 */
class AddDelegateType extends EWSType
{
    /**
     * Contains the identities of delegates to add to or update in a mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var ArrayOfDelegateUserType
     */
    public $DelegateUsers;

    /**
     * Defines how meeting requests are handled between the delegate and the
     * principal.
     *
     * @since Exchange 2007 SP1
     *
     * @var DeliverMeetingRequestsType
     */
    public $DeliverMeetingRequests;

    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007 SP1
     *
     * @var EmailAddressType
     */
    public $Maibox;
}
