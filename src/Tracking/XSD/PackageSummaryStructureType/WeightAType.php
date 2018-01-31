<?php

namespace TNTExpressConnect\Tracking\XSD\PackageSummaryStructureType;

/**
 * Class representing WeightAType
 */
class WeightAType
{

    /**
     * @property float $__value
     */
    private $__value = null;

    /**
     * @property string $units
     */
    private $units = null;

    /**
     * Construct
     *
     * @param float $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param float $value
     * @return float
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as units
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Sets a new units
     *
     * @param string $units
     * @return self
     */
    public function setUnits($units)
    {
        $this->units = $units;
        return $this;
    }


}

