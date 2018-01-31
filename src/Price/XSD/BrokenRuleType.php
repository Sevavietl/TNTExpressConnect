<?php

namespace TNTExpressConnect\Price\XSD;

/**
 * Class representing BrokenRuleType
 *
 * The brokenRule section is for application errors which the customer can resolve
 * such as invalid
 *  postcode, login credentials.
 * XSD Type: brokenRule
 */
class BrokenRuleType
{

    /**
     * The rateId is used to associate the error with the corresponding priceCheck.
     *
     * @property string $rateId
     */
    private $rateId = null;

    /**
     * This can be used to determine the severity of the error returned. The three
     * categories are
     *  
     *  
     *  â€˜Iâ€™ â€“ Information
     *  
     *  
     *  â€˜Wâ€™ â€“ Warning
     *  
     *  
     *  â€˜Eâ€™ - Error
     *
     * @property string $messageType
     */
    private $messageType = null;

    /**
     * @property string $code
     */
    private $code = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * Gets as rateId
     *
     * The rateId is used to associate the error with the corresponding priceCheck.
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
     * The rateId is used to associate the error with the corresponding priceCheck.
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
     * Gets as messageType
     *
     * This can be used to determine the severity of the error returned. The three
     * categories are
     *  
     *  
     *  â€˜Iâ€™ â€“ Information
     *  
     *  
     *  â€˜Wâ€™ â€“ Warning
     *  
     *  
     *  â€˜Eâ€™ - Error
     *
     * @return string
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * Sets a new messageType
     *
     * This can be used to determine the severity of the error returned. The three
     * categories are
     *  
     *  
     *  â€˜Iâ€™ â€“ Information
     *  
     *  
     *  â€˜Wâ€™ â€“ Warning
     *  
     *  
     *  â€˜Eâ€™ - Error
     *
     * @param string $messageType
     * @return self
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;
        return $this;
    }

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

