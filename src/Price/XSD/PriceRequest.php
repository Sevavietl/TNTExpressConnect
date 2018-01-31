<?php

namespace TNTExpressConnect\Price\XSD;

/**
 * Class representing PriceRequest
 */
class PriceRequest
{

    /**
     * This is the application ID and should be set to â€˜PCâ€™.
     *
     * @property string $appId
     */
    private $appId = null;

    /**
     * This denotes the version of ExpressConnect Pricing that will be used. If a value
     * of 3.0 is
     *  supplied then the new interface functionality will be evoked If no appVersion
     * is supplied it
     *  will be assume
     *  that the existing interface is used. Only 3.0 will be considered valid, if any
     *  other value is supplied then
     *  an error will be returned..
     *
     * @property float $appVersion
     */
    private $appVersion = null;

    /**
     * @property \TNTExpressConnect\Price\XSD\PriceCheck[] $priceCheck
     */
    private $priceCheck = array(
        
    );

    /**
     * Gets as appId
     *
     * This is the application ID and should be set to â€˜PCâ€™.
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * Sets a new appId
     *
     * This is the application ID and should be set to â€˜PCâ€™.
     *
     * @param string $appId
     * @return self
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * Gets as appVersion
     *
     * This denotes the version of ExpressConnect Pricing that will be used. If a value
     * of 3.0 is
     *  supplied then the new interface functionality will be evoked If no appVersion
     * is supplied it
     *  will be assume
     *  that the existing interface is used. Only 3.0 will be considered valid, if any
     *  other value is supplied then
     *  an error will be returned..
     *
     * @return float
     */
    public function getAppVersion()
    {
        return $this->appVersion;
    }

    /**
     * Sets a new appVersion
     *
     * This denotes the version of ExpressConnect Pricing that will be used. If a value
     * of 3.0 is
     *  supplied then the new interface functionality will be evoked If no appVersion
     * is supplied it
     *  will be assume
     *  that the existing interface is used. Only 3.0 will be considered valid, if any
     *  other value is supplied then
     *  an error will be returned..
     *
     * @param float $appVersion
     * @return self
     */
    public function setAppVersion($appVersion)
    {
        $this->appVersion = $appVersion;
        return $this;
    }

    /**
     * Adds as priceCheck
     *
     * @return self
     * @param \TNTExpressConnect\Price\XSD\PriceCheck $priceCheck
     */
    public function addToPriceCheck(\TNTExpressConnect\Price\XSD\PriceCheck $priceCheck)
    {
        $this->priceCheck[] = $priceCheck;
        return $this;
    }

    /**
     * isset priceCheck
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPriceCheck($index)
    {
        return isset($this->priceCheck[$index]);
    }

    /**
     * unset priceCheck
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPriceCheck($index)
    {
        unset($this->priceCheck[$index]);
    }

    /**
     * Gets as priceCheck
     *
     * @return \TNTExpressConnect\Price\XSD\PriceCheck[]
     */
    public function getPriceCheck()
    {
        return $this->priceCheck;
    }

    /**
     * Sets a new priceCheck
     *
     * @param \TNTExpressConnect\Price\XSD\PriceCheck[] $priceCheck
     * @return self
     */
    public function setPriceCheck(array $priceCheck)
    {
        $this->priceCheck = $priceCheck;
        return $this;
    }


}

