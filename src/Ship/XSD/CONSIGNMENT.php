<?php

namespace TNTExpressConnect\Ship\XSD;

/**
 * Class representing CONSIGNMENT
 */
class CONSIGNMENT
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
     * @property string $fIRSTTIMETRADER
     */
    private $fIRSTTIMETRADER = null;

    /**
     * @property string $bOOKINGREF
     */
    private $bOOKINGREF = null;

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

    /**
     * Gets as fIRSTTIMETRADER
     *
     * @return string
     */
    public function getFIRSTTIMETRADER()
    {
        return $this->fIRSTTIMETRADER;
    }

    /**
     * Sets a new fIRSTTIMETRADER
     *
     * @param string $fIRSTTIMETRADER
     * @return self
     */
    public function setFIRSTTIMETRADER($fIRSTTIMETRADER)
    {
        $this->fIRSTTIMETRADER = $fIRSTTIMETRADER;
        return $this;
    }

    /**
     * Gets as bOOKINGREF
     *
     * @return string
     */
    public function getBOOKINGREF()
    {
        return $this->bOOKINGREF;
    }

    /**
     * Sets a new bOOKINGREF
     *
     * @param string $bOOKINGREF
     * @return self
     */
    public function setBOOKINGREF($bOOKINGREF)
    {
        $this->bOOKINGREF = $bOOKINGREF;
        return $this;
    }


}

