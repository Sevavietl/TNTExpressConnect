<?php

namespace TNTExpressConnect\Price\XSD;

/**
 * Class representing AddressType
 *
 *
 * XSD Type: address
 */
class AddressType
{

    /**
     * The ISO 3166-1 Alpha-2 country code for the country of the given address. This
     * is a
     *  mandatory element.
     *
     * @property string $country
     */
    private $country = null;

    /**
     * The town name as recognised by TNT.
     *
     * @property string $town
     */
    private $town = null;

    /**
     * Postcode or zip code
     *
     * @property string $postcode
     */
    private $postcode = null;

    /**
     * Gets as country
     *
     * The ISO 3166-1 Alpha-2 country code for the country of the given address. This
     * is a
     *  mandatory element.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * The ISO 3166-1 Alpha-2 country code for the country of the given address. This
     * is a
     *  mandatory element.
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as town
     *
     * The town name as recognised by TNT.
     *
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Sets a new town
     *
     * The town name as recognised by TNT.
     *
     * @param string $town
     * @return self
     */
    public function setTown($town)
    {
        $this->town = $town;
        return $this;
    }

    /**
     * Gets as postcode
     *
     * Postcode or zip code
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Sets a new postcode
     *
     * Postcode or zip code
     *
     * @param string $postcode
     * @return self
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
        return $this;
    }


}

