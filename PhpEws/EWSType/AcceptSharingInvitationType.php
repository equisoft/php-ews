<?php
/**
 * Contains AcceptSharingInvitationType.
 */

namespace PhpEws\EWSType;

/**
 * Used to accept an invitation that allows access to another user’s calendar or
 * contacts data.
 */
class AcceptSharingInvitationType extends EWSType
{
    /**
     * Identifies the item to which the response object refers.
     *
     * @since Exchange 2010
     *
     * @var ItemIdType
     */
    public $ReferenceItemId;
}
