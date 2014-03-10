<?php
/**
 * Definition of the MailboxData type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the MailboxData type
 */
class MailboxData extends EWSType
{
    /**
     * Email property
     *
     * @var EmailAddress
     */
    public $Email;

    /**
     * AttendeeType property
     *
     * @var MeetingAttendeeType
     */
    public $AttendeeType;

    /**
     * ExcludeConflicts property
     *
     * @var boolean
     */
    public $ExcludeConflicts;
}
