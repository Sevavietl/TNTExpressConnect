<?php

namespace TNTExpressConnect\Ship\XSD\Response;

/**
 * Class representing ERROR
 */
class ERROR
{

    /**
     * @property string $cODE
     */
    private $cODE = null;

    /**
     * @property string $dESCRIPTION
     */
    private $dESCRIPTION = null;

    /**
     * @property string $sOURCE
     */
    private $sOURCE = null;

    /**
     * Gets as cODE
     *
     * @return string
     */
    public function getCODE()
    {
        return $this->cODE;
    }

    /**
     * Sets a new cODE
     *
     * @param string $cODE
     * @return self
     */
    public function setCODE($cODE)
    {
        $this->cODE = $cODE;
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
     * Gets as sOURCE
     *
     * @return string
     */
    public function getSOURCE()
    {
        return $this->sOURCE;
    }

    /**
     * Sets a new sOURCE
     *
     * @param string $sOURCE
     * @return self
     */
    public function setSOURCE($sOURCE)
    {
        $this->sOURCE = $sOURCE;
        return $this;
    }


}

