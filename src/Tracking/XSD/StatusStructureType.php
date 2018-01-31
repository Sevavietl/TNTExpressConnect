<?php

namespace TNTExpressConnect\Tracking\XSD;

/**
 * Class representing StatusStructureType
 *
 *
 * XSD Type: StatusStructure
 */
class StatusStructureType
{

    /**
     * @property string $statusCode
     */
    private $statusCode = null;

    /**
     * @property string $statusDescription
     */
    private $statusDescription = null;

    /**
     * @property \TNTExpressConnect\Tracking\XSD\DateType $localEventDate
     */
    private $localEventDate = null;

    /**
     * @property \TNTExpressConnect\Tracking\XSD\TimeType $localEventTime
     */
    private $localEventTime = null;

    /**
     * @property string $depot
     */
    private $depot = null;

    /**
     * @property string $depotName
     */
    private $depotName = null;

    /**
     * Gets as statusCode
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets a new statusCode
     *
     * @param string $statusCode
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * Gets as statusDescription
     *
     * @return string
     */
    public function getStatusDescription()
    {
        return $this->statusDescription;
    }

    /**
     * Sets a new statusDescription
     *
     * @param string $statusDescription
     * @return self
     */
    public function setStatusDescription($statusDescription)
    {
        $this->statusDescription = $statusDescription;
        return $this;
    }

    /**
     * Gets as localEventDate
     *
     * @return \TNTExpressConnect\Tracking\XSD\DateType
     */
    public function getLocalEventDate()
    {
        return $this->localEventDate;
    }

    /**
     * Sets a new localEventDate
     *
     * @param \TNTExpressConnect\Tracking\XSD\DateType $localEventDate
     * @return self
     */
    public function setLocalEventDate(\TNTExpressConnect\Tracking\XSD\DateType $localEventDate)
    {
        $this->localEventDate = $localEventDate;
        return $this;
    }

    /**
     * Gets as localEventTime
     *
     * @return \TNTExpressConnect\Tracking\XSD\TimeType
     */
    public function getLocalEventTime()
    {
        return $this->localEventTime;
    }

    /**
     * Sets a new localEventTime
     *
     * @param \TNTExpressConnect\Tracking\XSD\TimeType $localEventTime
     * @return self
     */
    public function setLocalEventTime(\TNTExpressConnect\Tracking\XSD\TimeType $localEventTime)
    {
        $this->localEventTime = $localEventTime;
        return $this;
    }

    /**
     * Gets as depot
     *
     * @return string
     */
    public function getDepot()
    {
        return $this->depot;
    }

    /**
     * Sets a new depot
     *
     * @param string $depot
     * @return self
     */
    public function setDepot($depot)
    {
        $this->depot = $depot;
        return $this;
    }

    /**
     * Gets as depotName
     *
     * @return string
     */
    public function getDepotName()
    {
        return $this->depotName;
    }

    /**
     * Sets a new depotName
     *
     * @param string $depotName
     * @return self
     */
    public function setDepotName($depotName)
    {
        $this->depotName = $depotName;
        return $this;
    }


}

