<?php

namespace TNTExpressConnect\Ship\XSD\Response;

/**
 * Class representing CREATE
 */
class CREATE
{

    /**
     * @property string $cONREF
     */
    private $cONREF = null;

    /**
     * @property string $cONNUMBER
     */
    private $cONNUMBER = null;

    /**
     * @property string $sUCCESS
     */
    private $sUCCESS = null;

    /**
     * Gets as cONREF
     *
     * @return string
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
    public function setCONREF($cONREF)
    {
        $this->cONREF = $cONREF;
        return $this;
    }

    /**
     * Gets as cONNUMBER
     *
     * @return string
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
    public function setCONNUMBER($cONNUMBER)
    {
        $this->cONNUMBER = $cONNUMBER;
        return $this;
    }

    /**
     * Gets as sUCCESS
     *
     * @return string
     */
    public function getSUCCESS()
    {
        return $this->sUCCESS;
    }

    /**
     * Sets a new sUCCESS
     *
     * @param string $sUCCESS
     * @return self
     */
    public function setSUCCESS($sUCCESS)
    {
        $this->sUCCESS = $sUCCESS;
        return $this;
    }


}

