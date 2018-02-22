<?php

namespace TNTExpressConnect\Ship\XSD;

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
     * @property \TNTExpressConnect\Ship\XSD\RATE $rATE
     */
    private $rATE = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\BOOK $bOOK
     */
    private $bOOK = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\SHIP $sHIP
     */
    private $sHIP = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\PRINT $pRINT
     */
    private $pRINT = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\SHOWGROUPCODE $sHOWGROUPCODE
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
     * @return \TNTExpressConnect\Ship\XSD\RATE
     */
    public function getRATE()
    {
        return $this->rATE;
    }

    /**
     * Sets a new rATE
     *
     * @param \TNTExpressConnect\Ship\XSD\RATE $rATE
     * @return self
     */
    public function setRATE(\TNTExpressConnect\Ship\XSD\RATE $rATE)
    {
        $this->rATE = $rATE;
        return $this;
    }

    /**
     * Gets as bOOK
     *
     * @return \TNTExpressConnect\Ship\XSD\BOOK
     */
    public function getBOOK()
    {
        return $this->bOOK;
    }

    /**
     * Sets a new bOOK
     *
     * @param \TNTExpressConnect\Ship\XSD\BOOK $bOOK
     * @return self
     */
    public function setBOOK(\TNTExpressConnect\Ship\XSD\BOOK $bOOK)
    {
        $this->bOOK = $bOOK;
        return $this;
    }

    /**
     * Gets as sHIP
     *
     * @return \TNTExpressConnect\Ship\XSD\SHIP
     */
    public function getSHIP()
    {
        return $this->sHIP;
    }

    /**
     * Sets a new sHIP
     *
     * @param \TNTExpressConnect\Ship\XSD\SHIP $sHIP
     * @return self
     */
    public function setSHIP(\TNTExpressConnect\Ship\XSD\SHIP $sHIP)
    {
        $this->sHIP = $sHIP;
        return $this;
    }

    /**
     * Gets as pRINT
     *
     * @return \TNTExpressConnect\Ship\XSD\PRINT
     */
    public function getPRINT()
    {
        return $this->pRINT;
    }

    /**
     * Sets a new pRINT
     *
     * @param \TNTExpressConnect\Ship\XSD\PRINT $pRINT
     * @return self
     */
    public function setPRINT(\TNTExpressConnect\Ship\XSD\PRINT $pRINT)
    {
        $this->pRINT = $pRINT;
        return $this;
    }

    /**
     * Gets as sHOWGROUPCODE
     *
     * @return \TNTExpressConnect\Ship\XSD\SHOWGROUPCODE
     */
    public function getSHOWGROUPCODE()
    {
        return $this->sHOWGROUPCODE;
    }

    /**
     * Sets a new sHOWGROUPCODE
     *
     * @param \TNTExpressConnect\Ship\XSD\SHOWGROUPCODE $sHOWGROUPCODE
     * @return self
     */
    public function setSHOWGROUPCODE(\TNTExpressConnect\Ship\XSD\SHOWGROUPCODE $sHOWGROUPCODE)
    {
        $this->sHOWGROUPCODE = $sHOWGROUPCODE;
        return $this;
    }


}

