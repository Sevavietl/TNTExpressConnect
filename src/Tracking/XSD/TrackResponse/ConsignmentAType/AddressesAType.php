<?php

namespace TNTExpressConnect\Tracking\XSD\TrackResponse\ConsignmentAType;

/**
 * Class representing AddressesAType
 */
class AddressesAType
{

    /**
     * @property \TNTExpressConnect\Tracking\XSD\AddressStructureType[] $address
     */
    private $address = array(
        
    );

    /**
     * Adds as address
     *
     * @return self
     * @param \TNTExpressConnect\Tracking\XSD\AddressStructureType $address
     */
    public function addToAddress(\TNTExpressConnect\Tracking\XSD\AddressStructureType $address)
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * isset address
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddress($index)
    {
        return isset($this->address[$index]);
    }

    /**
     * unset address
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddress($index)
    {
        unset($this->address[$index]);
    }

    /**
     * Gets as address
     *
     * @return \TNTExpressConnect\Tracking\XSD\AddressStructureType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \TNTExpressConnect\Tracking\XSD\AddressStructureType[] $address
     * @return self
     */
    public function setAddress(array $address)
    {
        $this->address = $address;
        return $this;
    }


}

