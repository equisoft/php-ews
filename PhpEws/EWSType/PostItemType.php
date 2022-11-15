<?php
/**
 * Definition of the PostItemType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the PostItemType type
 */
class PostItemType extends EWSType
{
    /**
     * ConversationIndex property
     *
     * @var base64Binary
     */
    public $ConversationIndex;

    /**
     * ConversationTopic property
     *
     * @var string
     */
    public $ConversationTopic;

    /**
     * From property
     *
     * @var SingleRecipientType
     */
    public $From;

    /**
     * InternetMessageId property
     *
     * @var string
     */
    public $InternetMessageId;

    /**
     * IsRead property
     *
     * @var boolean
     */
    public $IsRead;

    /**
     * PostedTime property
     *
     * @var string dateTime
     */
    public $PostedTime;

    /**
     * References property
     *
     * @var string
     */
    public $References;

    /**
     * Sender property
     *
     * @var SingleRecipientType
     */
    public $Sender;
}
