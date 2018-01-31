<?php

namespace TNTExpressConnect\Tracking\XSD;

/**
 * Class representing TrackResponse
 */
class TrackResponse
{

    /**
     * A response to a request for summary details will only contain mandatory child
     * elements of Consignment
     *
     * @property \TNTExpressConnect\Tracking\XSD\TrackResponse\ConsignmentAType[]
     * $consignment
     */
    private $consignment = array(
        
    );

    /**
     * @property string $continuationKey
     */
    private $continuationKey = null;

    /**
     * @property \TNTExpressConnect\Tracking\XSD\ErrorStructureType $error
     */
    private $error = null;

    /**
     * Adds as consignment
     *
     * A response to a request for summary details will only contain mandatory child
     * elements of Consignment
     *
     * @return self
     * @param \TNTExpressConnect\Tracking\XSD\TrackResponse\ConsignmentAType
     * $consignment
     */
    public function addToConsignment(\TNTExpressConnect\Tracking\XSD\TrackResponse\ConsignmentAType $consignment)
    {
        $this->consignment[] = $consignment;
        return $this;
    }

    /**
     * isset consignment
     *
     * A response to a request for summary details will only contain mandatory child
     * elements of Consignment
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetConsignment($index)
    {
        return isset($this->consignment[$index]);
    }

    /**
     * unset consignment
     *
     * A response to a request for summary details will only contain mandatory child
     * elements of Consignment
     *
     * @param scalar $index
     * @return void
     */
    public function unsetConsignment($index)
    {
        unset($this->consignment[$index]);
    }

    /**
     * Gets as consignment
     *
     * A response to a request for summary details will only contain mandatory child
     * elements of Consignment
     *
     * @return \TNTExpressConnect\Tracking\XSD\TrackResponse\ConsignmentAType[]
     */
    public function getConsignment()
    {
        return $this->consignment;
    }

    /**
     * Sets a new consignment
     *
     * A response to a request for summary details will only contain mandatory child
     * elements of Consignment
     *
     * @param \TNTExpressConnect\Tracking\XSD\TrackResponse\ConsignmentAType[]
     * $consignment
     * @return self
     */
    public function setConsignment(array $consignment)
    {
        $this->consignment = $consignment;
        return $this;
    }

    /**
     * Gets as continuationKey
     *
     * @return string
     */
    public function getContinuationKey()
    {
        return $this->continuationKey;
    }

    /**
     * Sets a new continuationKey
     *
     * @param string $continuationKey
     * @return self
     */
    public function setContinuationKey($continuationKey)
    {
        $this->continuationKey = $continuationKey;
        return $this;
    }

    /**
     * Gets as error
     *
     * @return \TNTExpressConnect\Tracking\XSD\ErrorStructureType
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param \TNTExpressConnect\Tracking\XSD\ErrorStructureType $error
     * @return self
     */
    public function setError(\TNTExpressConnect\Tracking\XSD\ErrorStructureType $error)
    {
        $this->error = $error;
        return $this;
    }


}

