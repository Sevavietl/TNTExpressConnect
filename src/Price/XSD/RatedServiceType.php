<?php

namespace TNTExpressConnect\Price\XSD;

/**
 * Class representing RatedServiceType
 *
 *
 * XSD Type: ratedService
 */
class RatedServiceType
{

    /**
     * This is a container element for Information relating to the TNT product chosen
     * for this
     *  priceCheck.
     *
     * @property \TNTExpressConnect\Price\XSD\ProductType $product
     */
    private $product = null;

    /**
     * The totalPrice element contains the total estimated price for the service
     * including VAT.
     *
     * @property float $totalPrice
     */
    private $totalPrice = null;

    /**
     * The totalPriceExclVat element contains the total estimated price for the service
     * excluding
     *  VAT.
     *
     * @property float $totalPriceExclVat
     */
    private $totalPriceExclVat = null;

    /**
     * The vatAmount element contains the estimated amount of VAT for the service
     * requested.
     *
     * @property float $vatAmount
     */
    private $vatAmount = null;

    /**
     * The chargeElements element contains an optional breakdown of any charges which
     * are included
     *  within the price such as VAT and fuel supplements. See the chargeElements
     * section for more
     *  information.
     *
     * @property \TNTExpressConnect\Price\XSD\ChargeElementType[] $chargeElements
     */
    private $chargeElements = null;

    /**
     * Gets as product
     *
     * This is a container element for Information relating to the TNT product chosen
     * for this
     *  priceCheck.
     *
     * @return \TNTExpressConnect\Price\XSD\ProductType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * This is a container element for Information relating to the TNT product chosen
     * for this
     *  priceCheck.
     *
     * @param \TNTExpressConnect\Price\XSD\ProductType $product
     * @return self
     */
    public function setProduct(\TNTExpressConnect\Price\XSD\ProductType $product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Gets as totalPrice
     *
     * The totalPrice element contains the total estimated price for the service
     * including VAT.
     *
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Sets a new totalPrice
     *
     * The totalPrice element contains the total estimated price for the service
     * including VAT.
     *
     * @param float $totalPrice
     * @return self
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }

    /**
     * Gets as totalPriceExclVat
     *
     * The totalPriceExclVat element contains the total estimated price for the service
     * excluding
     *  VAT.
     *
     * @return float
     */
    public function getTotalPriceExclVat()
    {
        return $this->totalPriceExclVat;
    }

    /**
     * Sets a new totalPriceExclVat
     *
     * The totalPriceExclVat element contains the total estimated price for the service
     * excluding
     *  VAT.
     *
     * @param float $totalPriceExclVat
     * @return self
     */
    public function setTotalPriceExclVat($totalPriceExclVat)
    {
        $this->totalPriceExclVat = $totalPriceExclVat;
        return $this;
    }

    /**
     * Gets as vatAmount
     *
     * The vatAmount element contains the estimated amount of VAT for the service
     * requested.
     *
     * @return float
     */
    public function getVatAmount()
    {
        return $this->vatAmount;
    }

    /**
     * Sets a new vatAmount
     *
     * The vatAmount element contains the estimated amount of VAT for the service
     * requested.
     *
     * @param float $vatAmount
     * @return self
     */
    public function setVatAmount($vatAmount)
    {
        $this->vatAmount = $vatAmount;
        return $this;
    }

    /**
     * Adds as chargeElement
     *
     * The chargeElements element contains an optional breakdown of any charges which
     * are included
     *  within the price such as VAT and fuel supplements. See the chargeElements
     * section for more
     *  information.
     *
     * @return self
     * @param \TNTExpressConnect\Price\XSD\ChargeElementType $chargeElement
     */
    public function addToChargeElements(\TNTExpressConnect\Price\XSD\ChargeElementType $chargeElement)
    {
        $this->chargeElements[] = $chargeElement;
        return $this;
    }

    /**
     * isset chargeElements
     *
     * The chargeElements element contains an optional breakdown of any charges which
     * are included
     *  within the price such as VAT and fuel supplements. See the chargeElements
     * section for more
     *  information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetChargeElements($index)
    {
        return isset($this->chargeElements[$index]);
    }

    /**
     * unset chargeElements
     *
     * The chargeElements element contains an optional breakdown of any charges which
     * are included
     *  within the price such as VAT and fuel supplements. See the chargeElements
     * section for more
     *  information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetChargeElements($index)
    {
        unset($this->chargeElements[$index]);
    }

    /**
     * Gets as chargeElements
     *
     * The chargeElements element contains an optional breakdown of any charges which
     * are included
     *  within the price such as VAT and fuel supplements. See the chargeElements
     * section for more
     *  information.
     *
     * @return \TNTExpressConnect\Price\XSD\ChargeElementType[]
     */
    public function getChargeElements()
    {
        return $this->chargeElements;
    }

    /**
     * Sets a new chargeElements
     *
     * The chargeElements element contains an optional breakdown of any charges which
     * are included
     *  within the price such as VAT and fuel supplements. See the chargeElements
     * section for more
     *  information.
     *
     * @param \TNTExpressConnect\Price\XSD\ChargeElementType[] $chargeElements
     * @return self
     */
    public function setChargeElements(array $chargeElements)
    {
        $this->chargeElements = $chargeElements;
        return $this;
    }


}

