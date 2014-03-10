<?php
/**
 * Definition of the GetAttachmentType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GetAttachmentType type
 */
class GetAttachmentType extends EWSType
{
    /**
     * AttachmentShape property
     *
     * @var AttachmentResponseShapeType
     */
    public $AttachmentShape;

    /**
     * AttachmentIds property
     *
     * @var NonEmptyArrayOfRequestAttachmentIdsType
     */
    public $AttachmentIds;
}
