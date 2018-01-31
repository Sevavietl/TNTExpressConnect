<?php

namespace TNTExpressConnect\Price\XSD;

/**
 * Class representing ConsignmentDetailsType
 *
 *
 * XSD Type: consignmentDetails
 */
class ConsignmentDetailsType
{

    /**
     * The total weight of the shipment, Mandatory element, must be supplied in
     * Kilograms.
     *
     * @property float $totalWeight
     */
    private $totalWeight = null;

    /**
     * The total volume of the shipment, Mandatory element if non document, must be
     * supplied in
     *  cubic metres.
     *
     * @property float $totalVolume
     */
    private $totalVolume = null;

    /**
     * The total number of pieces this priceCheck contains. In cases where only some of
     * the
     *  pieces
     *  are being submitted, this value should contain the total number of pieces in
     * the
     *  consignment, not the total
     *  number of pieces in the request.
     *
     * @property integer $totalNumberOfPieces
     */
    private $totalNumberOfPieces = null;

    /**
     * Gets as totalWeight
     *
     * The total weight of the shipment, Mandatory element, must be supplied in
     * Kilograms.
     *
     * @return float
     */
    public function getTotalWeight()
    {
        return $this->totalWeight;
    }

    /**
     * Sets a new totalWeight
     *
     * The total weight of the shipment, Mandatory element, must be supplied in
     * Kilograms.
     *
     * @param float $totalWeight
     * @return self
     */
    public function setTotalWeight($totalWeight)
    {
        $this->totalWeight = $totalWeight;
        return $this;
    }

    /**
     * Gets as totalVolume
     *
     * The total volume of the shipment, Mandatory element if non document, must be
     * supplied in
     *  cubic metres.
     *
     * @return float
     */
    public function getTotalVolume()
    {
        return $this->totalVolume;
    }

    /**
     * Sets a new totalVolume
     *
     * The total volume of the shipment, Mandatory element if non document, must be
     * supplied in
     *  cubic metres.
     *
     * @param float $totalVolume
     * @return self
     */
    public function setTotalVolume($totalVolume)
    {
        $this->totalVolume = $totalVolume;
        return $this;
    }

    /**
     * Gets as totalNumberOfPieces
     *
     * The total number of pieces this priceCheck contains. In cases where only some of
     * the
     *  pieces
     *  are being submitted, this value should contain the total number of pieces in
     * the
     *  consignment, not the total
     *  number of pieces in the request.
     *
     * @return integer
     */
    public function getTotalNumberOfPieces()
    {
        return $this->totalNumberOfPieces;
    }

    /**
     * Sets a new totalNumberOfPieces
     *
     * The total number of pieces this priceCheck contains. In cases where only some of
     * the
     *  pieces
     *  are being submitted, this value should contain the total number of pieces in
     * the
     *  consignment, not the total
     *  number of pieces in the request.
     *
     * @param integer $totalNumberOfPieces
     * @return self
     */
    public function setTotalNumberOfPieces($totalNumberOfPieces)
    {
        $this->totalNumberOfPieces = $totalNumberOfPieces;
        return $this;
    }


}

