<?php

namespace TNTExpressConnect\Price\XSD;

/**
 * Class representing PieceMeasurementsType
 *
 *
 * XSD Type: pieceMeasurements
 */
class PieceMeasurementsType
{

    /**
     * The length in metres.
     *
     * @property float $length
     */
    private $length = null;

    /**
     * The width in metres.
     *
     * @property float $width
     */
    private $width = null;

    /**
     * The height in metres.
     *
     * @property float $height
     */
    private $height = null;

    /**
     * The weight of an individual piece in Kilograms
     *
     * @property float $weight
     */
    private $weight = null;

    /**
     * Gets as length
     *
     * The length in metres.
     *
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * The length in metres.
     *
     * @param float $length
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Gets as width
     *
     * The width in metres.
     *
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * The width in metres.
     *
     * @param float $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Gets as height
     *
     * The height in metres.
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * The height in metres.
     *
     * @param float $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Gets as weight
     *
     * The weight of an individual piece in Kilograms
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * The weight of an individual piece in Kilograms
     *
     * @param float $weight
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }


}

