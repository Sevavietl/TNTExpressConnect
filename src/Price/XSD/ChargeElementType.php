<?php

namespace TNTExpressConnect\Price\XSD;

/**
 * Class representing ChargeElementType
 *
 *
 * XSD Type: chargeElement
 */
class ChargeElementType
{

    /**
     * The chargeItem is an identifier for the chargeElement within the list of
     * chargeElements
     *  returned.
     *
     * @property integer $chargeItem
     */
    private $chargeItem = null;

    /**
     * The chargeCategory is a descriptor of the type of charge element being returned.
     * This will
     *  either be SURCHARGE or VAT.
     *
     * @property string $chargeCategory
     */
    private $chargeCategory = null;

    /**
     * The chargeCode is a unique identifier for the charge being applied.
     *
     * @property string $chargeCode
     */
    private $chargeCode = null;

    /**
     * The description provides a more detailed explanation of the charge being applied
     * e.g. Fuel
     *  Surcharge.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * The chargeValue is the cost of the charge in the currency.
     *
     * @property float $chargeValue
     */
    private $chargeValue = null;

    /**
     * The vatIndicator defines whether the VAT is applied to the charge.
     *
     * @property boolean $vatIndicator
     */
    private $vatIndicator = null;

    /**
     * Gets as chargeItem
     *
     * The chargeItem is an identifier for the chargeElement within the list of
     * chargeElements
     *  returned.
     *
     * @return integer
     */
    public function getChargeItem()
    {
        return $this->chargeItem;
    }

    /**
     * Sets a new chargeItem
     *
     * The chargeItem is an identifier for the chargeElement within the list of
     * chargeElements
     *  returned.
     *
     * @param integer $chargeItem
     * @return self
     */
    public function setChargeItem($chargeItem)
    {
        $this->chargeItem = $chargeItem;
        return $this;
    }

    /**
     * Gets as chargeCategory
     *
     * The chargeCategory is a descriptor of the type of charge element being returned.
     * This will
     *  either be SURCHARGE or VAT.
     *
     * @return string
     */
    public function getChargeCategory()
    {
        return $this->chargeCategory;
    }

    /**
     * Sets a new chargeCategory
     *
     * The chargeCategory is a descriptor of the type of charge element being returned.
     * This will
     *  either be SURCHARGE or VAT.
     *
     * @param string $chargeCategory
     * @return self
     */
    public function setChargeCategory($chargeCategory)
    {
        $this->chargeCategory = $chargeCategory;
        return $this;
    }

    /**
     * Gets as chargeCode
     *
     * The chargeCode is a unique identifier for the charge being applied.
     *
     * @return string
     */
    public function getChargeCode()
    {
        return $this->chargeCode;
    }

    /**
     * Sets a new chargeCode
     *
     * The chargeCode is a unique identifier for the charge being applied.
     *
     * @param string $chargeCode
     * @return self
     */
    public function setChargeCode($chargeCode)
    {
        $this->chargeCode = $chargeCode;
        return $this;
    }

    /**
     * Gets as description
     *
     * The description provides a more detailed explanation of the charge being applied
     * e.g. Fuel
     *  Surcharge.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The description provides a more detailed explanation of the charge being applied
     * e.g. Fuel
     *  Surcharge.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as chargeValue
     *
     * The chargeValue is the cost of the charge in the currency.
     *
     * @return float
     */
    public function getChargeValue()
    {
        return $this->chargeValue;
    }

    /**
     * Sets a new chargeValue
     *
     * The chargeValue is the cost of the charge in the currency.
     *
     * @param float $chargeValue
     * @return self
     */
    public function setChargeValue($chargeValue)
    {
        $this->chargeValue = $chargeValue;
        return $this;
    }

    /**
     * Gets as vatIndicator
     *
     * The vatIndicator defines whether the VAT is applied to the charge.
     *
     * @return boolean
     */
    public function getVatIndicator()
    {
        return $this->vatIndicator;
    }

    /**
     * Sets a new vatIndicator
     *
     * The vatIndicator defines whether the VAT is applied to the charge.
     *
     * @param boolean $vatIndicator
     * @return self
     */
    public function setVatIndicator($vatIndicator)
    {
        $this->vatIndicator = $vatIndicator;
        return $this;
    }


}

