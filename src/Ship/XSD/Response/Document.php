<?php

namespace TNTExpressConnect\Ship\XSD\Response;

/**
 * Class representing Document
 */
class Document
{

    /**
     * @property string $gROUPCODE
     */
    private $gROUPCODE = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Response\CREATE[] $cREATE
     */
    private $cREATE = array(
        
    );

    /**
     * @property \TNTExpressConnect\Ship\XSD\Response\RATE $rATE
     */
    private $rATE = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Response\CONSIGNMENT[] $bOOK
     */
    private $bOOK = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Response\SHIP $sHIP
     */
    private $sHIP = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Response\PRINTXsd $pRINT
     */
    private $pRINT = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Response\ERROR[] $eRROR
     */
    private $eRROR = array(
        
    );

    /**
     * Gets as gROUPCODE
     *
     * @return string
     */
    public function getGROUPCODE()
    {
        return $this->gROUPCODE;
    }

    /**
     * Sets a new gROUPCODE
     *
     * @param string $gROUPCODE
     * @return self
     */
    public function setGROUPCODE($gROUPCODE)
    {
        $this->gROUPCODE = $gROUPCODE;
        return $this;
    }

    /**
     * Adds as cREATE
     *
     * @return self
     * @param \TNTExpressConnect\Ship\XSD\Response\CREATE $cREATE
     */
    public function addToCREATE(\TNTExpressConnect\Ship\XSD\Response\CREATE $cREATE)
    {
        $this->cREATE[] = $cREATE;
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
     * @return \TNTExpressConnect\Ship\XSD\Response\CREATE[]
     */
    public function getCREATE()
    {
        return $this->cREATE;
    }

    /**
     * Sets a new cREATE
     *
     * @param \TNTExpressConnect\Ship\XSD\Response\CREATE[] $cREATE
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
     * @return \TNTExpressConnect\Ship\XSD\Response\RATE
     */
    public function getRATE()
    {
        return $this->rATE;
    }

    /**
     * Sets a new rATE
     *
     * @param \TNTExpressConnect\Ship\XSD\Response\RATE $rATE
     * @return self
     */
    public function setRATE(\TNTExpressConnect\Ship\XSD\Response\RATE $rATE)
    {
        $this->rATE = $rATE;
        return $this;
    }

    /**
     * Adds as cONSIGNMENT
     *
     * @return self
     * @param \TNTExpressConnect\Ship\XSD\Response\CONSIGNMENT $cONSIGNMENT
     */
    public function addToBOOK(\TNTExpressConnect\Ship\XSD\Response\CONSIGNMENT $cONSIGNMENT)
    {
        $this->bOOK[] = $cONSIGNMENT;
        return $this;
    }

    /**
     * isset bOOK
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBOOK($index)
    {
        return isset($this->bOOK[$index]);
    }

    /**
     * unset bOOK
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBOOK($index)
    {
        unset($this->bOOK[$index]);
    }

    /**
     * Gets as bOOK
     *
     * @return \TNTExpressConnect\Ship\XSD\Response\CONSIGNMENT[]
     */
    public function getBOOK()
    {
        return $this->bOOK;
    }

    /**
     * Sets a new bOOK
     *
     * @param \TNTExpressConnect\Ship\XSD\Response\CONSIGNMENT[] $bOOK
     * @return self
     */
    public function setBOOK(array $bOOK)
    {
        $this->bOOK = $bOOK;
        return $this;
    }

    /**
     * Gets as sHIP
     *
     * @return \TNTExpressConnect\Ship\XSD\Response\SHIP
     */
    public function getSHIP()
    {
        return $this->sHIP;
    }

    /**
     * Sets a new sHIP
     *
     * @param \TNTExpressConnect\Ship\XSD\Response\SHIP $sHIP
     * @return self
     */
    public function setSHIP(\TNTExpressConnect\Ship\XSD\Response\SHIP $sHIP)
    {
        $this->sHIP = $sHIP;
        return $this;
    }

    /**
     * Gets as pRINT
     *
     * @return \TNTExpressConnect\Ship\XSD\Response\PRINTXsd
     */
    public function getPRINT()
    {
        return $this->pRINT;
    }

    /**
     * Sets a new pRINT
     *
     * @param \TNTExpressConnect\Ship\XSD\Response\PRINTXsd $pRINT
     * @return self
     */
    public function setPRINT(\TNTExpressConnect\Ship\XSD\Response\PRINTXsd $pRINT)
    {
        $this->pRINT = $pRINT;
        return $this;
    }

    /**
     * Adds as eRROR
     *
     * @return self
     * @param \TNTExpressConnect\Ship\XSD\Response\ERROR $eRROR
     */
    public function addToERROR(\TNTExpressConnect\Ship\XSD\Response\ERROR $eRROR)
    {
        $this->eRROR[] = $eRROR;
        return $this;
    }

    /**
     * isset eRROR
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetERROR($index)
    {
        return isset($this->eRROR[$index]);
    }

    /**
     * unset eRROR
     *
     * @param scalar $index
     * @return void
     */
    public function unsetERROR($index)
    {
        unset($this->eRROR[$index]);
    }

    /**
     * Gets as eRROR
     *
     * @return \TNTExpressConnect\Ship\XSD\Response\ERROR[]
     */
    public function getERROR()
    {
        return $this->eRROR;
    }

    /**
     * Sets a new eRROR
     *
     * @param \TNTExpressConnect\Ship\XSD\Response\ERROR[] $eRROR
     * @return self
     */
    public function setERROR(array $eRROR)
    {
        $this->eRROR = $eRROR;
        return $this;
    }


}

