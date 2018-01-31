<?php

namespace TNTExpressConnect\Tracking\XSD;

/**
 * Class representing PackageSummaryStructureType
 *
 *
 * XSD Type: PackageSummaryStructure
 */
class PackageSummaryStructureType
{

    /**
     * @property integer $numberOfPieces
     */
    private $numberOfPieces = null;

    /**
     * @property
     * \TNTExpressConnect\Tracking\XSD\PackageSummaryStructureType\WeightAType $weight
     */
    private $weight = null;

    /**
     * @property string $packageDescription
     */
    private $packageDescription = null;

    /**
     * @property string $goodsDescription
     */
    private $goodsDescription = null;

    /**
     * @property
     * \TNTExpressConnect\Tracking\XSD\PackageSummaryStructureType\InvoiceAmountAType
     * $invoiceAmount
     */
    private $invoiceAmount = null;

    /**
     * Gets as numberOfPieces
     *
     * @return integer
     */
    public function getNumberOfPieces()
    {
        return $this->numberOfPieces;
    }

    /**
     * Sets a new numberOfPieces
     *
     * @param integer $numberOfPieces
     * @return self
     */
    public function setNumberOfPieces($numberOfPieces)
    {
        $this->numberOfPieces = $numberOfPieces;
        return $this;
    }

    /**
     * Gets as weight
     *
     * @return \TNTExpressConnect\Tracking\XSD\PackageSummaryStructureType\WeightAType
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * @param \TNTExpressConnect\Tracking\XSD\PackageSummaryStructureType\WeightAType
     * $weight
     * @return self
     */
    public function setWeight(\TNTExpressConnect\Tracking\XSD\PackageSummaryStructureType\WeightAType $weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Gets as packageDescription
     *
     * @return string
     */
    public function getPackageDescription()
    {
        return $this->packageDescription;
    }

    /**
     * Sets a new packageDescription
     *
     * @param string $packageDescription
     * @return self
     */
    public function setPackageDescription($packageDescription)
    {
        $this->packageDescription = $packageDescription;
        return $this;
    }

    /**
     * Gets as goodsDescription
     *
     * @return string
     */
    public function getGoodsDescription()
    {
        return $this->goodsDescription;
    }

    /**
     * Sets a new goodsDescription
     *
     * @param string $goodsDescription
     * @return self
     */
    public function setGoodsDescription($goodsDescription)
    {
        $this->goodsDescription = $goodsDescription;
        return $this;
    }

    /**
     * Gets as invoiceAmount
     *
     * @return
     * \TNTExpressConnect\Tracking\XSD\PackageSummaryStructureType\InvoiceAmountAType
     */
    public function getInvoiceAmount()
    {
        return $this->invoiceAmount;
    }

    /**
     * Sets a new invoiceAmount
     *
     * @param
     * \TNTExpressConnect\Tracking\XSD\PackageSummaryStructureType\InvoiceAmountAType
     * $invoiceAmount
     * @return self
     */
    public function setInvoiceAmount(\TNTExpressConnect\Tracking\XSD\PackageSummaryStructureType\InvoiceAmountAType $invoiceAmount)
    {
        $this->invoiceAmount = $invoiceAmount;
        return $this;
    }


}

