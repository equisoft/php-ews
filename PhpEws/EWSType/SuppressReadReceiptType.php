<?php
/**
 * Contains SuppressReadReceiptType.
 */

namespace PhpEws\EWSType;

/**
 * Used to suppress read receipts.
 *
 * @package php-ews\Types
 */
class SuppressReadReceiptType extends EWSType
{
    /**
     * Identifies the item to which the response object refers.
     *
     * @since Exchange 2007
     *
     * @var ItemIdType
     */
    public $ReferenceItemId;
}
