<?php

namespace TNTExpressConnect\Ship\XSD\Request;

/**
 * Class representing ACTIVITY
 */
class ACTIVITY
{

    /**
     * @property string[] $cREATE
     */
    private $cREATE = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\RATE $rATE
     */
    private $rATE = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\BOOK $bOOK
     */
    private $bOOK = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\SHIP $sHIP
     */
    private $sHIP = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\PRINTXsd $pRINT
     */
    private $pRINT = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\SHOWGROUPCODE $sHOWGROUPCODE
     */
    private $sHOWGROUPCODE = null;

    /**
     * Adds as cONREF
     *
     * @return self
     * @param string $cONREF
     */
    public function addToCREATE($cONREF)
    {
        $this->cREATE[] = $cONREF;
        return $this;
    }

    /**
     * isset cREATE
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCREATE($index)
    {
        return isset($this->cREATE[$index]);
    }

    /**
     * unset cREATE
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCREATE($index)
    {
        unset($this->cREATE[$index]);
    }

    /**
     * Gets as cREATE
     *
     * @return string[]
     */
    public function getCREATE()
    {
        return $this->cREATE;
    }

    /**
     * Sets a new cREATE
     *
     * @param string $cREATE
     * @return self
     */
    public function setCREATE(array $cREATE)
    {
        $this->cREATE = $cREATE;
        return $this;
    }

    /**
     * Gets as rATE
     *
     * @return \TNTExpressConnect\Ship\XSD\Request\RATE
     */
    public function getRATE()
    {
        return $this->rATE;
    }

    /**
     * Sets a new rATE
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\RATE $rATE
     * @return self
     */
    public function setRATE(\TNTExpressConnect\Ship\XSD\Request\RATE $rATE)
    {
        $this->rATE = $rATE;
        return $this;
    }

    /**
     * Gets as bOOK
     *
     * @return \TNTExpressConnect\Ship\XSD\Request\BOOK
     */
    public function getBOOK()
    {
        return $this->bOOK;
    }

    /**
     * Sets a new bOOK
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\BOOK $bOOK
     * @return self
     */
    public function setBOOK(\TNTExpressConnect\Ship\XSD\Request\BOOK $bOOK)
    {
        $this->bOOK = $bOOK;
        return $this;
    }

    /**
     * Gets as sHIP
     *
     * @return \TNTExpressConnect\Ship\XSD\Request\SHIP
     */
    public function getSHIP()
    {
        return $this->sHIP;
    }

    /**
     * Sets a new sHIP
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\SHIP $sHIP
     * @return self
     */
    public function setSHIP(\TNTExpressConnect\Ship\XSD\Request\SHIP $sHIP)
    {
        $this->sHIP = $sHIP;
        return $this;
    }

    /**
     * Gets as pRINT
     *
     * @return \TNTExpressConnect\Ship\XSD\Request\PRINTXsd
     */
    public function getPRINT()
    {
        return $this->pRINT;
    }

    /**
     * Sets a new pRINT
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\PRINTXsd $pRINT
     * @return self
     */
    public function setPRINT(\TNTExpressConnect\Ship\XSD\Request\PRINTXsd $pRINT)
    {
        $this->pRINT = $pRINT;
        return $this;
    }

    /**
     * Gets as sHOWGROUPCODE
     *
     * @return \TNTExpressConnect\Ship\XSD\Request\SHOWGROUPCODE
     */
    public function getSHOWGROUPCODE()
    {
        return $this->sHOWGROUPCODE;
    }

    /**
     * Sets a new sHOWGROUPCODE
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\SHOWGROUPCODE $sHOWGROUPCODE
     * @return self
     */
    public function setSHOWGROUPCODE(\TNTExpressConnect\Ship\XSD\Request\SHOWGROUPCODE $sHOWGROUPCODE)
    {
        $this->sHOWGROUPCODE = $sHOWGROUPCODE;
        return $this;
    }


}

