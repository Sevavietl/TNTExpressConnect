<?php

namespace TNTExpressConnect\Ship\XSD;

/**
 * Class representing LOGIN
 */
class LOGIN
{

    /**
     * @property string $cOMPANY
     */
    private $cOMPANY = null;

    /**
     * @property string $pASSWORD
     */
    private $pASSWORD = null;

    /**
     * @property string $aPPID
     */
    private $aPPID = null;

    /**
     * @property float $aPPVERSION
     */
    private $aPPVERSION = null;

    /**
     * Gets as cOMPANY
     *
     * @return string
     */
    public function getCOMPANY()
    {
        return $this->cOMPANY;
    }

    /**
     * Sets a new cOMPANY
     *
     * @param string $cOMPANY
     * @return self
     */
    public function setCOMPANY($cOMPANY)
    {
        $this->cOMPANY = $cOMPANY;
        return $this;
    }

    /**
     * Gets as pASSWORD
     *
     * @return string
     */
    public function getPASSWORD()
    {
        return $this->pASSWORD;
    }

    /**
     * Sets a new pASSWORD
     *
     * @param string $pASSWORD
     * @return self
     */
    public function setPASSWORD($pASSWORD)
    {
        $this->pASSWORD = $pASSWORD;
        return $this;
    }

    /**
     * Gets as aPPID
     *
     * @return string
     */
    public function getAPPID()
    {
        return $this->aPPID;
    }

    /**
     * Sets a new aPPID
     *
     * @param string $aPPID
     * @return self
     */
    public function setAPPID($aPPID)
    {
        $this->aPPID = $aPPID;
        return $this;
    }

    /**
     * Gets as aPPVERSION
     *
     * @return float
     */
    public function getAPPVERSION()
    {
        return $this->aPPVERSION;
    }

    /**
     * Sets a new aPPVERSION
     *
     * @param float $aPPVERSION
     * @return self
     */
    public function setAPPVERSION($aPPVERSION)
    {
        $this->aPPVERSION = $aPPVERSION;
        return $this;
    }


}

