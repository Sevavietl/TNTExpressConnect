<?php

namespace TNTExpressConnect\Tracking\XSD;

/**
 * Class representing ShipmentSummaryStructureType
 *
 *
 * XSD Type: ShipmentSummaryStructure
 */
class ShipmentSummaryStructureType
{

    /**
     * Enumerated values of Sender and Receiver
     *
     * @property string $termsOfPayment
     */
    private $termsOfPayment = null;

    /**
     * @property \TNTExpressConnect\Tracking\XSD\DateType $dueDate
     */
    private $dueDate = null;

    /**
     * The English description of the Service, e.g. Global Express
     *
     * @property string $service
     */
    private $service = null;

    /**
     * Gets as termsOfPayment
     *
     * Enumerated values of Sender and Receiver
     *
     * @return string
     */
    public function getTermsOfPayment()
    {
        return $this->termsOfPayment;
    }

    /**
     * Sets a new termsOfPayment
     *
     * Enumerated values of Sender and Receiver
     *
     * @param string $termsOfPayment
     * @return self
     */
    public function setTermsOfPayment($termsOfPayment)
    {
        $this->termsOfPayment = $termsOfPayment;
        return $this;
    }

    /**
     * Gets as dueDate
     *
     * @return \TNTExpressConnect\Tracking\XSD\DateType
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Sets a new dueDate
     *
     * @param \TNTExpressConnect\Tracking\XSD\DateType $dueDate
     * @return self
     */
    public function setDueDate(\TNTExpressConnect\Tracking\XSD\DateType $dueDate)
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * Gets as service
     *
     * The English description of the Service, e.g. Global Express
     *
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * The English description of the Service, e.g. Global Express
     *
     * @param string $service
     * @return self
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }


}

