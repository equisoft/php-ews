<?php
/**
 * Definition of the AttachmentResponseShapeType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the AttachmentResponseShapeType type
 */
class AttachmentResponseShapeType extends EWSType
{
    /**
     * IncludeMimeContent property
     *
     * @var boolean
     */
    public $IncludeMimeContent;

    /**
     * BodyType property
     *
     * @var BodyTypeResponseType
     */
    public $BodyType;

    /**
     * AdditionalProperties property
     *
     * @var NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;
}
