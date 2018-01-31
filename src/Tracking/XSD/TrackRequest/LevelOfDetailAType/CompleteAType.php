<?php

namespace TNTExpressConnect\Tracking\XSD\TrackRequest\LevelOfDetailAType;

/**
 * Class representing CompleteAType
 */
class CompleteAType
{

    /**
     * @property boolean $originAddress
     */
    private $originAddress = null;

    /**
     * @property boolean $destinationAddress
     */
    private $destinationAddress = null;

    /**
     * @property boolean $shipment
     */
    private $shipment = null;

    /**
     * @property boolean $package
     */
    private $package = null;

    /**
     * @property boolean $podImage
     */
    private $podImage = null;

    /**
     * Gets as originAddress
     *
     * @return boolean
     */
    public function getOriginAddress()
    {
        return $this->originAddress;
    }

    /**
     * Sets a new originAddress
     *
     * @param boolean $originAddress
     * @return self
     */
    public function setOriginAddress($originAddress)
    {
        $this->originAddress = $originAddress;
        return $this;
    }

    /**
     * Gets as destinationAddress
     *
     * @return boolean
     */
    public function getDestinationAddress()
    {
        return $this->destinationAddress;
    }

    /**
     * Sets a new destinationAddress
     *
     * @param boolean $destinationAddress
     * @return self
     */
    public function setDestinationAddress($destinationAddress)
    {
        $this->destinationAddress = $destinationAddress;
        return $this;
    }

    /**
     * Gets as shipment
     *
     * @return boolean
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * @param boolean $shipment
     * @return self
     */
    public function setShipment($shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Gets as package
     *
     * @return boolean
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Sets a new package
     *
     * @param boolean $package
     * @return self
     */
    public function setPackage($package)
    {
        $this->package = $package;
        return $this;
    }

    /**
     * Gets as podImage
     *
     * @return boolean
     */
    public function getPodImage()
    {
        return $this->podImage;
    }

    /**
     * Sets a new podImage
     *
     * @param boolean $podImage
     * @return self
     */
    public function setPodImage($podImage)
    {
        $this->podImage = $podImage;
        return $this;
    }


}

