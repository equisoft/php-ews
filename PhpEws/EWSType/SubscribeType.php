<?php
/**
 * Definition of the SubscribeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SubscribeType type
 */
class SubscribeType extends EWSType
{
    /**
     * PullSubscriptionRequest property
     *
     * @var PullSubscriptionRequestType
     */
    public $PullSubscriptionRequest;

    /**
     * PushSubscriptionRequest property
     *
     * @var PushSubscriptionRequestType
     */
    public $PushSubscriptionRequest;
}
