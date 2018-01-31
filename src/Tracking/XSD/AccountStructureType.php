<?php

namespace TNTExpressConnect\Tracking\XSD;

/**
 * Class representing AccountStructureType
 *
 *
 * XSD Type: AccountStructure
 */
class AccountStructureType
{

    /**
     * @property string $number
     */
    private $number = null;

    /**
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * Gets as number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

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


}

