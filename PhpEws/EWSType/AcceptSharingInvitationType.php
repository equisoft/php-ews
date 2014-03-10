<?php
/**
 * Contains AcceptSharingInvitationType.
 */

namespace PhpEws\EWSType;

/**
 * Used to accept an invitation that allows access to another user’s calendar or
 * contacts data.
 *
 * @package php-ews\Types
 */
class AcceptSharingInvitationType extends EWSType
{
    /**
     * Identifies the item to which the response object refers.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ItemIdType
     */
    public $ReferenceItemId;
}
