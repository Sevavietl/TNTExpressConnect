<?php

namespace TNTExpressConnect\Tracking\XSD;

/**
 * Class representing AddressStructureType
 *
 *
 * XSD Type: AddressStructure
 */
class AddressStructureType
{

    /**
     * @property string $addressParty
     */
    private $addressParty = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string[] $addressLine
     */
    private $addressLine = array(
        
    );

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * @property string $province
     */
    private $province = null;

    /**
     * @property string $postcode
     */
    private $postcode = null;

    /**
     * @property \TNTExpressConnect\Tracking\XSD\CountryStructureType $country
     */
    private $country = null;

    /**
     * @property string $phoneNumber
     */
    private $phoneNumber = null;

    /**
     * @property string $contactName
     */
    private $contactName = null;

    /**
     * @property string $contactPhoneNumber
     */
    private $contactPhoneNumber = null;

    /**
     * @property \TNTExpressConnect\Serializer\AnyType $accountNumber
     */
    private $accountNumber = null;

    /**
     * @property string $vATNumber
     */
    private $vATNumber = null;

    /**
     * Gets as addressParty
     *
     * @return string
     */
    public function getAddressParty()
    {
        return $this->addressParty;
    }

    /**
     * Sets a new addressParty
     *
     * @param string $addressParty
     * @return self
     */
    public function setAddressParty($addressParty)
    {
        $this->addressParty = $addressParty;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as addressLine
     *
     * @return self
     * @param string $addressLine
     */
    public function addToAddressLine($addressLine)
    {
        $this->addressLine[] = $addressLine;
        return $this;
    }

    /**
     * isset addressLine
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddressLine($index)
    {
        return isset($this->addressLine[$index]);
    }

    /**
     * unset addressLine
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddressLine($index)
    {
        unset($this->addressLine[$index]);
    }

    /**
     * Gets as addressLine
     *
     * @return string[]
     */
    public function getAddressLine()
    {
        return $this->addressLine;
    }

    /**
     * Sets a new addressLine
     *
     * @param string[] $addressLine
     * @return self
     */
    public function setAddressLine(array $addressLine)
    {
        $this->addressLine = $addressLine;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Sets a new province
     *
     * @param string $province
     * @return self
     */
    public function setProvince($province)
    {
        $this->province = $province;
        return $this;
    }

    /**
     * Gets as postcode
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
     * @param string $postcode
     * @return self
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * Gets as country
     *
     * @return \TNTExpressConnect\Tracking\XSD\CountryStructureType
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param \TNTExpressConnect\Tracking\XSD\CountryStructureType $country
     * @return self
     */
    public function setCountry(\TNTExpressConnect\Tracking\XSD\CountryStructureType $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Sets a new phoneNumber
     *
     * @param string $phoneNumber
     * @return self
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Gets as contactName
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Sets a new contactName
     *
     * @param string $contactName
     * @return self
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
        return $this;
    }

    /**
     * Gets as contactPhoneNumber
     *
     * @return string
     */
    public function getContactPhoneNumber()
    {
        return $this->contactPhoneNumber;
    }

    /**
     * Sets a new contactPhoneNumber
     *
     * @param string $contactPhoneNumber
     * @return self
     */
    public function setContactPhoneNumber($contactPhoneNumber)
    {
        $this->contactPhoneNumber = $contactPhoneNumber;
        return $this;
    }

    /**
     * Gets as accountNumber
     *
     * @return \TNTExpressConnect\Serializer\AnyType
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Sets a new accountNumber
     *
     * @param \TNTExpressConnect\Serializer\AnyType $accountNumber
     * @return self
     */
    public function setAccountNumber(\TNTExpressConnect\Serializer\AnyType $accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * Gets as vATNumber
     *
     * @return string
     */
    public function getVATNumber()
    {
        return $this->vATNumber;
    }

    /**
     * Sets a new vATNumber
     *
     * @param string $vATNumber
     * @return self
     */
    public function setVATNumber($vATNumber)
    {
        $this->vATNumber = $vATNumber;
        return $this;
    }


}

