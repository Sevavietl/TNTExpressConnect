<?php

namespace TNTExpressConnect\Tracking\XSD;

/**
 * Class representing CountryStructureType
 *
 *
 * XSD Type: CountryStructure
 */
class CountryStructureType
{

    /**
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * @property string $countryName
     */
    private $countryName = null;

    /**
     * Gets as countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Gets as countryName
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Sets a new countryName
     *
     * @param string $countryName
     * @return self
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
        return $this;
    }


}

