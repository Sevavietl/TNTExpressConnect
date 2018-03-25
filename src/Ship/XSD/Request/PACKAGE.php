<?php

namespace TNTExpressConnect\Ship\XSD\Request;

/**
 * Class representing PACKAGE
 */
class PACKAGE
{

    /**
     * @property integer $iTEMS
     */
    private $iTEMS = null;

    /**
     * @property string $dESCRIPTION
     */
    private $dESCRIPTION = null;

    /**
     * @property float $lENGTH
     */
    private $lENGTH = null;

    /**
     * @property float $hEIGHT
     */
    private $hEIGHT = null;

    /**
     * @property float $wIDTH
     */
    private $wIDTH = null;

    /**
     * @property float $wEIGHT
     */
    private $wEIGHT = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\ARTICLE[] $aRTICLE
     */
    private $aRTICLE = array(
        
    );

    /**
     * Gets as iTEMS
     *
     * @return integer
     */
    public function getITEMS()
    {
        return $this->iTEMS;
    }

    /**
     * Sets a new iTEMS
     *
     * @param integer $iTEMS
     * @return self
     */
    public function setITEMS($iTEMS)
    {
        $this->iTEMS = $iTEMS;
        return $this;
    }

    /**
     * Gets as dESCRIPTION
     *
     * @return string
     */
    public function getDESCRIPTION()
    {
        return $this->dESCRIPTION;
    }

    /**
     * Sets a new dESCRIPTION
     *
     * @param string $dESCRIPTION
     * @return self
     */
    public function setDESCRIPTION($dESCRIPTION)
    {
        $this->dESCRIPTION = $dESCRIPTION;
        return $this;
    }

    /**
     * Gets as lENGTH
     *
     * @return float
     */
    public function getLENGTH()
    {
        return $this->lENGTH;
    }

    /**
     * Sets a new lENGTH
     *
     * @param float $lENGTH
     * @return self
     */
    public function setLENGTH($lENGTH)
    {
        $this->lENGTH = $lENGTH;
        return $this;
    }

    /**
     * Gets as hEIGHT
     *
     * @return float
     */
    public function getHEIGHT()
    {
        return $this->hEIGHT;
    }

    /**
     * Sets a new hEIGHT
     *
     * @param float $hEIGHT
     * @return self
     */
    public function setHEIGHT($hEIGHT)
    {
        $this->hEIGHT = $hEIGHT;
        return $this;
    }

    /**
     * Gets as wIDTH
     *
     * @return float
     */
    public function getWIDTH()
    {
        return $this->wIDTH;
    }

    /**
     * Sets a new wIDTH
     *
     * @param float $wIDTH
     * @return self
     */
    public function setWIDTH($wIDTH)
    {
        $this->wIDTH = $wIDTH;
        return $this;
    }

    /**
     * Gets as wEIGHT
     *
     * @return float
     */
    public function getWEIGHT()
    {
        return $this->wEIGHT;
    }

    /**
     * Sets a new wEIGHT
     *
     * @param float $wEIGHT
     * @return self
     */
    public function setWEIGHT($wEIGHT)
    {
        $this->wEIGHT = $wEIGHT;
        return $this;
    }

    /**
     * Adds as aRTICLE
     *
     * @return self
     * @param \TNTExpressConnect\Ship\XSD\Request\ARTICLE $aRTICLE
     */
    public function addToARTICLE(\TNTExpressConnect\Ship\XSD\Request\ARTICLE $aRTICLE)
    {
        $this->aRTICLE[] = $aRTICLE;
        return $this;
    }

    /**
     * isset aRTICLE
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetARTICLE($index)
    {
        return isset($this->aRTICLE[$index]);
    }

    /**
     * unset aRTICLE
     *
     * @param scalar $index
     * @return void
     */
    public function unsetARTICLE($index)
    {
        unset($this->aRTICLE[$index]);
    }

    /**
     * Gets as aRTICLE
     *
     * @return \TNTExpressConnect\Ship\XSD\Request\ARTICLE[]
     */
    public function getARTICLE()
    {
        return $this->aRTICLE;
    }

    /**
     * Sets a new aRTICLE
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\ARTICLE[] $aRTICLE
     * @return self
     */
    public function setARTICLE(array $aRTICLE)
    {
        $this->aRTICLE = $aRTICLE;
        return $this;
    }


}

