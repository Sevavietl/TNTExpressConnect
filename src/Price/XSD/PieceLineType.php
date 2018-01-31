<?php

namespace TNTExpressConnect\Price\XSD;

/**
 * Class representing PieceLineType
 *
 *
 * XSD Type: pieceLine
 */
class PieceLineType
{

    /**
     * Number of pieces within this piece line.
     *
     * @property integer $numberOfPieces
     */
    private $numberOfPieces = null;

    /**
     * Container Element to hold the individual pieceLine measurements.
     *
     * @property \TNTExpressConnect\Price\XSD\PieceMeasurementsType $pieceMeasurements
     */
    private $pieceMeasurements = null;

    /**
     * Whether the packages have been placed onto a pallet. The default value is false
     *
     * @property boolean $pallet
     */
    private $pallet = null;

    /**
     * Gets as numberOfPieces
     *
     * Number of pieces within this piece line.
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
     * Number of pieces within this piece line.
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
     * Gets as pieceMeasurements
     *
     * Container Element to hold the individual pieceLine measurements.
     *
     * @return \TNTExpressConnect\Price\XSD\PieceMeasurementsType
     */
    public function getPieceMeasurements()
    {
        return $this->pieceMeasurements;
    }

    /**
     * Sets a new pieceMeasurements
     *
     * Container Element to hold the individual pieceLine measurements.
     *
     * @param \TNTExpressConnect\Price\XSD\PieceMeasurementsType $pieceMeasurements
     * @return self
     */
    public function setPieceMeasurements(\TNTExpressConnect\Price\XSD\PieceMeasurementsType $pieceMeasurements)
    {
        $this->pieceMeasurements = $pieceMeasurements;
        return $this;
    }

    /**
     * Gets as pallet
     *
     * Whether the packages have been placed onto a pallet. The default value is false
     *
     * @return boolean
     */
    public function getPallet()
    {
        return $this->pallet;
    }

    /**
     * Sets a new pallet
     *
     * Whether the packages have been placed onto a pallet. The default value is false
     *
     * @param boolean $pallet
     * @return self
     */
    public function setPallet($pallet)
    {
        $this->pallet = $pallet;
        return $this;
    }


}

