<?php
/**
 * Definition of the BaseSubscriptionRequestType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the BaseSubscriptionRequestType type
 */
class BaseSubscriptionRequestType extends EWSType
{
    /**
     * FolderIds property
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * EventTypes property
     *
     * @var NonEmptyArrayOfNotificationEventTypesType
     */
    public $EventTypes;

    /**
     * Watermark property
     *
     * @var WatermarkType
     */
    public $Watermark;
}
