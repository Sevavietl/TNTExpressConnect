<?php

namespace TNTExpressConnect\Tracking\XSD\TrackRequest;

/**
 * Class representing SearchCriteriaAType
 */
class SearchCriteriaAType
{

    /**
     * @property string $marketType
     */
    private $marketType = null;

    /**
     * @property string $originCountry
     */
    private $originCountry = null;

    /**
     * @property \TNTExpressConnect\Tracking\XSD\Account[] $account
     */
    private $account = array(
        
    );

    /**
     * @property \TNTExpressConnect\Tracking\XSD\Period $period
     */
    private $period = null;

    /**
     * @property string[] $alternativeConsignmentNumber
     */
    private $alternativeConsignmentNumber = array(
        
    );

    /**
     * @property string[] $consignmentNumber
     */
    private $consignmentNumber = array(
        
    );

    /**
     * @property string[] $customerReference
     */
    private $customerReference = array(
        
    );

    /**
     * @property string[] $pieceReference
     */
    private $pieceReference = array(
        
    );

    /**
     * Gets as marketType
     *
     * @return string
     */
    public function getMarketType()
    {
        return $this->marketType;
    }

    /**
     * Sets a new marketType
     *
     * @param string $marketType
     * @return self
     */
    public function setMarketType($marketType)
    {
        $this->marketType = $marketType;
        return $this;
    }

    /**
     * Gets as originCountry
     *
     * @return string
     */
    public function getOriginCountry()
    {
        return $this->originCountry;
    }

    /**
     * Sets a new originCountry
     *
     * @param string $originCountry
     * @return self
     */
    public function setOriginCountry($originCountry)
    {
        $this->originCountry = $originCountry;
        return $this;
    }

    /**
     * Adds as account
     *
     * @return self
     * @param \TNTExpressConnect\Tracking\XSD\Account $account
     */
    public function addToAccount(\TNTExpressConnect\Tracking\XSD\Account $account)
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * isset account
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAccount($index)
    {
        return isset($this->account[$index]);
    }

    /**
     * unset account
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAccount($index)
    {
        unset($this->account[$index]);
    }

    /**
     * Gets as account
     *
     * @return \TNTExpressConnect\Tracking\XSD\Account[]
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * @param \TNTExpressConnect\Tracking\XSD\Account[] $account
     * @return self
     */
    public function setAccount(array $account)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Gets as period
     *
     * @return \TNTExpressConnect\Tracking\XSD\Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * @param \TNTExpressConnect\Tracking\XSD\Period $period
     * @return self
     */
    public function setPeriod(\TNTExpressConnect\Tracking\XSD\Period $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as alternativeConsignmentNumber
     *
     * @return self
     * @param string $alternativeConsignmentNumber
     */
    public function addToAlternativeConsignmentNumber($alternativeConsignmentNumber)
    {
        $this->alternativeConsignmentNumber[] = $alternativeConsignmentNumber;
        return $this;
    }

    /**
     * isset alternativeConsignmentNumber
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAlternativeConsignmentNumber($index)
    {
        return isset($this->alternativeConsignmentNumber[$index]);
    }

    /**
     * unset alternativeConsignmentNumber
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAlternativeConsignmentNumber($index)
    {
        unset($this->alternativeConsignmentNumber[$index]);
    }

    /**
     * Gets as alternativeConsignmentNumber
     *
     * @return string[]
     */
    public function getAlternativeConsignmentNumber()
    {
        return $this->alternativeConsignmentNumber;
    }

    /**
     * Sets a new alternativeConsignmentNumber
     *
     * @param string $alternativeConsignmentNumber
     * @return self
     */
    public function setAlternativeConsignmentNumber(array $alternativeConsignmentNumber)
    {
        $this->alternativeConsignmentNumber = $alternativeConsignmentNumber;
        return $this;
    }

    /**
     * Adds as consignmentNumber
     *
     * @return self
     * @param string $consignmentNumber
     */
    public function addToConsignmentNumber($consignmentNumber)
    {
        $this->consignmentNumber[] = $consignmentNumber;
        return $this;
    }

    /**
     * isset consignmentNumber
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetConsignmentNumber($index)
    {
        return isset($this->consignmentNumber[$index]);
    }

    /**
     * unset consignmentNumber
     *
     * @param scalar $index
     * @return void
     */
    public function unsetConsignmentNumber($index)
    {
        unset($this->consignmentNumber[$index]);
    }

    /**
     * Gets as consignmentNumber
     *
     * @return string[]
     */
    public function getConsignmentNumber()
    {
        return $this->consignmentNumber;
    }

    /**
     * Sets a new consignmentNumber
     *
     * @param string $consignmentNumber
     * @return self
     */
    public function setConsignmentNumber(array $consignmentNumber)
    {
        $this->consignmentNumber = $consignmentNumber;
        return $this;
    }

    /**
     * Adds as customerReference
     *
     * @return self
     * @param string $customerReference
     */
    public function addToCustomerReference($customerReference)
    {
        $this->customerReference[] = $customerReference;
        return $this;
    }

    /**
     * isset customerReference
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCustomerReference($index)
    {
        return isset($this->customerReference[$index]);
    }

    /**
     * unset customerReference
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCustomerReference($index)
    {
        unset($this->customerReference[$index]);
    }

    /**
     * Gets as customerReference
     *
     * @return string[]
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * Sets a new customerReference
     *
     * @param string $customerReference
     * @return self
     */
    public function setCustomerReference(array $customerReference)
    {
        $this->customerReference = $customerReference;
        return $this;
    }

    /**
     * Adds as pieceReference
     *
     * @return self
     * @param string $pieceReference
     */
    public function addToPieceReference($pieceReference)
    {
        $this->pieceReference[] = $pieceReference;
        return $this;
    }

    /**
     * isset pieceReference
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPieceReference($index)
    {
        return isset($this->pieceReference[$index]);
    }

    /**
     * unset pieceReference
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPieceReference($index)
    {
        unset($this->pieceReference[$index]);
    }

    /**
     * Gets as pieceReference
     *
     * @return string[]
     */
    public function getPieceReference()
    {
        return $this->pieceReference;
    }

    /**
     * Sets a new pieceReference
     *
     * @param string $pieceReference
     * @return self
     */
    public function setPieceReference(array $pieceReference)
    {
        $this->pieceReference = $pieceReference;
        return $this;
    }


}

