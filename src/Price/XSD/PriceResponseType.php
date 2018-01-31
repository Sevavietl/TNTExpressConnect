<?php

namespace TNTExpressConnect\Price\XSD;

/**
 * Class representing PriceResponseType
 *
 *
 * XSD Type: priceResponse
 */
class PriceResponseType
{

    /**
     * This is made up of one or more ratedService
     *  which contain a price for a particular service
     *  option combination from the original request.
     *
     * @property \TNTExpressConnect\Price\XSD\RatedServicesType $ratedServices
     */
    private $ratedServices = null;

    /**
     * Gets as ratedServices
     *
     * This is made up of one or more ratedService
     *  which contain a price for a particular service
     *  option combination from the original request.
     *
     * @return \TNTExpressConnect\Price\XSD\RatedServicesType
     */
    public function getRatedServices()
    {
        return $this->ratedServices;
    }

    /**
     * Sets a new ratedServices
     *
     * This is made up of one or more ratedService
     *  which contain a price for a particular service
     *  option combination from the original request.
     *
     * @param \TNTExpressConnect\Price\XSD\RatedServicesType $ratedServices
     * @return self
     */
    public function setRatedServices(\TNTExpressConnect\Price\XSD\RatedServicesType $ratedServices)
    {
        $this->ratedServices = $ratedServices;
        return $this;
    }


}

