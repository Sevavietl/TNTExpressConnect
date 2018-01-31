<?php

namespace TNTExpressConnect\Tracking\XSD;

/**
 * Class representing ErrorStructureType
 *
 *
 * XSD Type: ErrorStructure
 */
class ErrorStructureType
{

    /**
     * An integer signifying failure to fulfill the request
     *
     * @property integer[] $code
     */
    private $code = array(
        
    );

    /**
     * An optional message specifying the reason for failure of request processing
     *
     * @property string[] $message
     */
    private $message = array(
        
    );

    /**
     * Adds as code
     *
     * An integer signifying failure to fulfill the request
     *
     * @return self
     * @param integer $code
     */
    public function addToCode($code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * isset code
     *
     * An integer signifying failure to fulfill the request
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCode($index)
    {
        return isset($this->code[$index]);
    }

    /**
     * unset code
     *
     * An integer signifying failure to fulfill the request
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCode($index)
    {
        unset($this->code[$index]);
    }

    /**
     * Gets as code
     *
     * An integer signifying failure to fulfill the request
     *
     * @return integer[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * An integer signifying failure to fulfill the request
     *
     * @param integer[] $code
     * @return self
     */
    public function setCode(array $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as message
     *
     * An optional message specifying the reason for failure of request processing
     *
     * @return self
     * @param string $message
     */
    public function addToMessage($message)
    {
        $this->message[] = $message;
        return $this;
    }

    /**
     * isset message
     *
     * An optional message specifying the reason for failure of request processing
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMessage($index)
    {
        return isset($this->message[$index]);
    }

    /**
     * unset message
     *
     * An optional message specifying the reason for failure of request processing
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMessage($index)
    {
        unset($this->message[$index]);
    }

    /**
     * Gets as message
     *
     * An optional message specifying the reason for failure of request processing
     *
     * @return string[]
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * An optional message specifying the reason for failure of request processing
     *
     * @param string[] $message
     * @return self
     */
    public function setMessage(array $message)
    {
        $this->message = $message;
        return $this;
    }


}

