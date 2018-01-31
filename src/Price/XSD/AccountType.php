<?php

namespace TNTExpressConnect\Price\XSD;

/**
 * Class representing AccountType
 *
 *
 * XSD Type: account
 */
class AccountType
{

    /**
     * TNT account number, which is the 9 or 10 digit number assigned by the TNT sales
     * person.
     *
     * @property string $accountNumber
     */
    private $accountNumber = null;

    /**
     * ISO 3166-1 Alpha-2 country code for the country in which the TNT account is
     * registered.
     *
     * @property string $accountCountry
     */
    private $accountCountry = null;

    /**
     * Gets as accountNumber
     *
     * TNT account number, which is the 9 or 10 digit number assigned by the TNT sales
     * person.
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Sets a new accountNumber
     *
     * TNT account number, which is the 9 or 10 digit number assigned by the TNT sales
     * person.
     *
     * @param string $accountNumber
     * @return self
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * Gets as accountCountry
     *
     * ISO 3166-1 Alpha-2 country code for the country in which the TNT account is
     * registered.
     *
     * @return string
     */
    public function getAccountCountry()
    {
        return $this->accountCountry;
    }

    /**
     * Sets a new accountCountry
     *
     * ISO 3166-1 Alpha-2 country code for the country in which the TNT account is
     * registered.
     *
     * @param string $accountCountry
     * @return self
     */
    public function setAccountCountry($accountCountry)
    {
        $this->accountCountry = $accountCountry;
        return $this;
    }


}

