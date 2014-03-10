<?php
/**
 * Definition of the SubscribeResponseMessageType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SubscribeResponseMessageType type
 */
class SubscribeResponseMessageType extends EWSType
{
    /**
     * SubscriptionId property
     *
     * @var SubscriptionIdType
     */
    public $SubscriptionId;

    /**
     * Watermark property
     *
     * @var WatermarkType
     */
    public $Watermark;
}
