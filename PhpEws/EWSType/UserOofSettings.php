<?php
/**
 * Definition of the UserOofSettings type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the UserOofSettings type
 */
class UserOofSettings extends EWSType
{
    /**
     * OofState property
     *
     * @var OofState
     */
    public $OofState;

    /**
     * ExternalAudience property
     *
     * @var ExternalAudience
     */
    public $ExternalAudience;

    /**
     * Duration property
     *
     * @var Duration
     */
    public $Duration;

    /**
     * InternalReply property
     *
     * @var ReplyBody
     */
    public $InternalReply;

    /**
     * ExternalReply property
     *
     * @var ReplyBody
     */
    public $ExternalReply;
}
