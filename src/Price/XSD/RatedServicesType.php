<?php

namespace TNTExpressConnect\Price\XSD;

/**
 * Class representing RatedServicesType
 *
 *
 * XSD Type: ratedServices
 */
class RatedServicesType
{

    /**
     * The rateId is used to associate the priceResponse with the corresponding
     * priceCheck.
     *
     * @property string $rateId
     */
    private $rateId = null;

    /**
     * The currency element describes the currency that the price is displayed.
     *
     * @property string $currency
     */
    private $currency = null;

    /**
     * A container element for the price details for a particular service.
     *
     * @property \TNTExpressConnect\Price\XSD\RatedServiceType[] $ratedService
     */
    private $ratedService = array(
        
    );

    /**
     * Gets as rateId
     *
     * The rateId is used to associate the priceResponse with the corresponding
     * priceCheck.
     *
     * @return string
     */
    public function getRateId()
    {
        return $this->rateId;
    }

    /**
     * Sets a new rateId
     *
     * The rateId is used to associate the priceResponse with the corresponding
     * priceCheck.
     *
     * @param string $rateId
     * @return self
     */
    public function setRateId($rateId)
    {
        $this->rateId = $rateId;
        return $this;
    }

    /**
     * Gets as currency
     *
     * The currency element describes the currency that the price is displayed.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * The currency element describes the currency that the price is displayed.
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Adds as ratedService
     *
     * A container element for the price details for a particular service.
     *
     * @return self
     * @param \TNTExpressConnect\Price\XSD\RatedServiceType $ratedService
     */
    public function addToRatedService(\TNTExpressConnect\Price\XSD\RatedServiceType $ratedService)
    {
        $this->ratedService[] = $ratedService;
        return $this;
    }

    /**
     * isset ratedService
     *
     * A container element for the price details for a particular service.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRatedService($index)
    {
        return isset($this->ratedService[$index]);
    }

    /**
     * unset ratedService
     *
     * A container element for the price details for a particular service.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRatedService($index)
    {
        unset($this->ratedService[$index]);
    }

    /**
     * Gets as ratedService
     *
     * A container element for the price details for a particular service.
     *
     * @return \TNTExpressConnect\Price\XSD\RatedServiceType[]
     */
    public function getRatedService()
    {
        return $this->ratedService;
    }

    /**
     * Sets a new ratedService
     *
     * A container element for the price details for a particular service.
     *
     * @param \TNTExpressConnect\Price\XSD\RatedServiceType[] $ratedService
     * @return self
     */
    public function setRatedService(array $ratedService)
    {
        $this->ratedService = $ratedService;
        return $this;
    }


}

