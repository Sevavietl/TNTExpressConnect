<?php

namespace TNTExpressConnect\Tracking\XSD;

/**
 * Class representing TimeFrameStructureType
 *
 *
 * XSD Type: TimeFrameStructure
 */
class TimeFrameStructureType
{

    /**
     * @property \TNTExpressConnect\Tracking\XSD\DateFrom $dateFrom
     */
    private $dateFrom = null;

    /**
     * @property \TNTExpressConnect\Tracking\XSD\DateTo $dateTo
     */
    private $dateTo = null;

    /**
     * @property integer $numberOfDays
     */
    private $numberOfDays = null;

    /**
     * Gets as dateFrom
     *
     * @return \TNTExpressConnect\Tracking\XSD\DateFrom
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets a new dateFrom
     *
     * @param \TNTExpressConnect\Tracking\XSD\DateFrom $dateFrom
     * @return self
     */
    public function setDateFrom(\TNTExpressConnect\Tracking\XSD\DateFrom $dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    /**
     * Gets as dateTo
     *
     * @return \TNTExpressConnect\Tracking\XSD\DateTo
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Sets a new dateTo
     *
     * @param \TNTExpressConnect\Tracking\XSD\DateTo $dateTo
     * @return self
     */
    public function setDateTo(\TNTExpressConnect\Tracking\XSD\DateTo $dateTo)
    {
        $this->dateTo = $dateTo;
        return $this;
    }

    /**
     * Gets as numberOfDays
     *
     * @return integer
     */
    public function getNumberOfDays()
    {
        return $this->numberOfDays;
    }

    /**
     * Sets a new numberOfDays
     *
     * @param integer $numberOfDays
     * @return self
     */
    public function setNumberOfDays($numberOfDays)
    {
        $this->numberOfDays = $numberOfDays;
        return $this;
    }


}

