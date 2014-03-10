<?php
/**
 * Definition of the GetDelegateType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GetDelegateType type
 */
class GetDelegateType extends EWSType
{
    /**
     * UserIds property
     *
     * @var ArrayOfUserIdType
     */
    public $UserIds;

    /**
     * IncludePermissions property
     *
     * @var boolean
     */
    public $IncludePermissions;
}
