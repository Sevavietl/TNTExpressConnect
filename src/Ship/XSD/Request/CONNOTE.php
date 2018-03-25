<?php

namespace TNTExpressConnect\Ship\XSD\Request;

/**
 * Class representing CONNOTE
 */
class CONNOTE
{

    /**
     * @property string[] $cONREF
     */
    private $cONREF = array(
        
    );

    /**
     * @property string[] $cONNUMBER
     */
    private $cONNUMBER = array(
        
    );

    /**
     * Adds as cONREF
     *
     * @return self
     * @param string $cONREF
     */
    public function addToCONREF($cONREF)
    {
        $this->cONREF[] = $cONREF;
        return $this;
    }

    /**
     * isset cONREF
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCONREF($index)
    {
        return isset($this->cONREF[$index]);
    }

    /**
     * unset cONREF
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCONREF($index)
    {
        unset($this->cONREF[$index]);
    }

    /**
     * Gets as cONREF
     *
     * @return string[]
     */
    public function getCONREF()
    {
        return $this->cONREF;
    }

    /**
     * Sets a new cONREF
     *
     * @param string $cONREF
     * @return self
     */
    public function setCONREF(array $cONREF)
    {
        $this->cONREF = $cONREF;
        return $this;
    }

    /**
     * Adds as cONNUMBER
     *
     * @return self
     * @param string $cONNUMBER
     */
    public function addToCONNUMBER($cONNUMBER)
    {
        $this->cONNUMBER[] = $cONNUMBER;
        return $this;
    }

    /**
     * isset cONNUMBER
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCONNUMBER($index)
    {
        return isset($this->cONNUMBER[$index]);
    }

    /**
     * unset cONNUMBER
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCONNUMBER($index)
    {
        unset($this->cONNUMBER[$index]);
    }

    /**
     * Gets as cONNUMBER
     *
     * @return string[]
     */
    public function getCONNUMBER()
    {
        return $this->cONNUMBER;
    }

    /**
     * Sets a new cONNUMBER
     *
     * @param string $cONNUMBER
     * @return self
     */
    public function setCONNUMBER(array $cONNUMBER)
    {
        $this->cONNUMBER = $cONNUMBER;
        return $this;
    }


}

