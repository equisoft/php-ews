<?php
/**
 * Definition of the PushSubscriptionRequestType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the PushSubscriptionRequestType type
 */
class PushSubscriptionRequestType extends EWSType
{
    /**
     * StatusFrequency property
     *
     * @var SubscriptionStatusFrequencyType
     */
    public $StatusFrequency;

    /**
     * URL property
     *
     * @var string
     */
    public $URL;
}
