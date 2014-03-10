<?php
/**
 * Contains PhysicalAddressIndexType.
 */

namespace PhpEws\EWSType;

/**
 * Represents the display types for physical addresses.
 */
class PhysicalAddressIndexType extends EWSType
{
    /**
     * Address index for business.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const BUSINESS = 'Business';

    /**
     * Address index for home.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const HOME = 'Home';

    /**
     * Address index for none.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NONE = 'None';

    /**
     * Address index for other.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OTHER = 'Other';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
      return $this->_;
    }
}
