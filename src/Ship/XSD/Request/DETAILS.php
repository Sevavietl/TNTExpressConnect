<?php

namespace TNTExpressConnect\Ship\XSD\Request;

/**
 * Class representing DETAILS
 */
class DETAILS
{

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\RECEIVER $rECEIVER
     */
    private $rECEIVER = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\DELIVERY $dELIVERY
     */
    private $dELIVERY = null;

    /**
     * @property string $cONNUMBER
     */
    private $cONNUMBER = null;

    /**
     * @property string $cUSTOMERREF
     */
    private $cUSTOMERREF = null;

    /**
     * @property string $cONTYPE
     */
    private $cONTYPE = null;

    /**
     * @property string $pAYMENTIND
     */
    private $pAYMENTIND = null;

    /**
     * @property integer $iTEMS
     */
    private $iTEMS = null;

    /**
     * @property float $tOTALWEIGHT
     */
    private $tOTALWEIGHT = null;

    /**
     * @property float $tOTALVOLUME
     */
    private $tOTALVOLUME = null;

    /**
     * @property string $cURRENCY
     */
    private $cURRENCY = null;

    /**
     * @property float $gOODSVALUE
     */
    private $gOODSVALUE = null;

    /**
     * @property float $iNSURANCEVALUE
     */
    private $iNSURANCEVALUE = null;

    /**
     * @property string $iNSURANCECURRENCY
     */
    private $iNSURANCECURRENCY = null;

    /**
     * @property string $dIVISION
     */
    private $dIVISION = null;

    /**
     * @property string $sERVICE
     */
    private $sERVICE = null;

    /**
     * @property string[] $oPTION
     */
    private $oPTION = array(
        
    );

    /**
     * @property string $dESCRIPTION
     */
    private $dESCRIPTION = null;

    /**
     * @property string $dELIVERYINST
     */
    private $dELIVERYINST = null;

    /**
     * @property string $cUSTOMCONTROLIN
     */
    private $cUSTOMCONTROLIN = null;

    /**
     * @property string $hAZARDOUS
     */
    private $hAZARDOUS = null;

    /**
     * @property string $uNNUMBER
     */
    private $uNNUMBER = null;

    /**
     * @property string $pACKINGGROUP
     */
    private $pACKINGGROUP = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\PACKAGE[] $pACKAGE
     */
    private $pACKAGE = array(
        
    );

    /**
     * Gets as rECEIVER
     *
     * @return \TNTExpressConnect\Ship\XSD\Request\RECEIVER
     */
    public function getRECEIVER()
    {
        return $this->rECEIVER;
    }

    /**
     * Sets a new rECEIVER
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\RECEIVER $rECEIVER
     * @return self
     */
    public function setRECEIVER(\TNTExpressConnect\Ship\XSD\Request\RECEIVER $rECEIVER)
    {
        $this->rECEIVER = $rECEIVER;
        return $this;
    }

    /**
     * Gets as dELIVERY
     *
     * @return \TNTExpressConnect\Ship\XSD\Request\DELIVERY
     */
    public function getDELIVERY()
    {
        return $this->dELIVERY;
    }

    /**
     * Sets a new dELIVERY
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\DELIVERY $dELIVERY
     * @return self
     */
    public function setDELIVERY(\TNTExpressConnect\Ship\XSD\Request\DELIVERY $dELIVERY)
    {
        $this->dELIVERY = $dELIVERY;
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
     * Gets as cUSTOMERREF
     *
     * @return string
     */
    public function getCUSTOMERREF()
    {
        return $this->cUSTOMERREF;
    }

    /**
     * Sets a new cUSTOMERREF
     *
     * @param string $cUSTOMERREF
     * @return self
     */
    public function setCUSTOMERREF($cUSTOMERREF)
    {
        $this->cUSTOMERREF = $cUSTOMERREF;
        return $this;
    }

    /**
     * Gets as cONTYPE
     *
     * @return string
     */
    public function getCONTYPE()
    {
        return $this->cONTYPE;
    }

    /**
     * Sets a new cONTYPE
     *
     * @param string $cONTYPE
     * @return self
     */
    public function setCONTYPE($cONTYPE)
    {
        $this->cONTYPE = $cONTYPE;
        return $this;
    }

    /**
     * Gets as pAYMENTIND
     *
     * @return string
     */
    public function getPAYMENTIND()
    {
        return $this->pAYMENTIND;
    }

    /**
     * Sets a new pAYMENTIND
     *
     * @param string $pAYMENTIND
     * @return self
     */
    public function setPAYMENTIND($pAYMENTIND)
    {
        $this->pAYMENTIND = $pAYMENTIND;
        return $this;
    }

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
     * Gets as tOTALWEIGHT
     *
     * @return float
     */
    public function getTOTALWEIGHT()
    {
        return $this->tOTALWEIGHT;
    }

    /**
     * Sets a new tOTALWEIGHT
     *
     * @param float $tOTALWEIGHT
     * @return self
     */
    public function setTOTALWEIGHT($tOTALWEIGHT)
    {
        $this->tOTALWEIGHT = $tOTALWEIGHT;
        return $this;
    }

    /**
     * Gets as tOTALVOLUME
     *
     * @return float
     */
    public function getTOTALVOLUME()
    {
        return $this->tOTALVOLUME;
    }

    /**
     * Sets a new tOTALVOLUME
     *
     * @param float $tOTALVOLUME
     * @return self
     */
    public function setTOTALVOLUME($tOTALVOLUME)
    {
        $this->tOTALVOLUME = $tOTALVOLUME;
        return $this;
    }

    /**
     * Gets as cURRENCY
     *
     * @return string
     */
    public function getCURRENCY()
    {
        return $this->cURRENCY;
    }

    /**
     * Sets a new cURRENCY
     *
     * @param string $cURRENCY
     * @return self
     */
    public function setCURRENCY($cURRENCY)
    {
        $this->cURRENCY = $cURRENCY;
        return $this;
    }

    /**
     * Gets as gOODSVALUE
     *
     * @return float
     */
    public function getGOODSVALUE()
    {
        return $this->gOODSVALUE;
    }

    /**
     * Sets a new gOODSVALUE
     *
     * @param float $gOODSVALUE
     * @return self
     */
    public function setGOODSVALUE($gOODSVALUE)
    {
        $this->gOODSVALUE = $gOODSVALUE;
        return $this;
    }

    /**
     * Gets as iNSURANCEVALUE
     *
     * @return float
     */
    public function getINSURANCEVALUE()
    {
        return $this->iNSURANCEVALUE;
    }

    /**
     * Sets a new iNSURANCEVALUE
     *
     * @param float $iNSURANCEVALUE
     * @return self
     */
    public function setINSURANCEVALUE($iNSURANCEVALUE)
    {
        $this->iNSURANCEVALUE = $iNSURANCEVALUE;
        return $this;
    }

    /**
     * Gets as iNSURANCECURRENCY
     *
     * @return string
     */
    public function getINSURANCECURRENCY()
    {
        return $this->iNSURANCECURRENCY;
    }

    /**
     * Sets a new iNSURANCECURRENCY
     *
     * @param string $iNSURANCECURRENCY
     * @return self
     */
    public function setINSURANCECURRENCY($iNSURANCECURRENCY)
    {
        $this->iNSURANCECURRENCY = $iNSURANCECURRENCY;
        return $this;
    }

    /**
     * Gets as dIVISION
     *
     * @return string
     */
    public function getDIVISION()
    {
        return $this->dIVISION;
    }

    /**
     * Sets a new dIVISION
     *
     * @param string $dIVISION
     * @return self
     */
    public function setDIVISION($dIVISION)
    {
        $this->dIVISION = $dIVISION;
        return $this;
    }

    /**
     * Gets as sERVICE
     *
     * @return string
     */
    public function getSERVICE()
    {
        return $this->sERVICE;
    }

    /**
     * Sets a new sERVICE
     *
     * @param string $sERVICE
     * @return self
     */
    public function setSERVICE($sERVICE)
    {
        $this->sERVICE = $sERVICE;
        return $this;
    }

    /**
     * Adds as oPTION
     *
     * @return self
     * @param string $oPTION
     */
    public function addToOPTION($oPTION)
    {
        $this->oPTION[] = $oPTION;
        return $this;
    }

    /**
     * isset oPTION
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOPTION($index)
    {
        return isset($this->oPTION[$index]);
    }

    /**
     * unset oPTION
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOPTION($index)
    {
        unset($this->oPTION[$index]);
    }

    /**
     * Gets as oPTION
     *
     * @return string[]
     */
    public function getOPTION()
    {
        return $this->oPTION;
    }

    /**
     * Sets a new oPTION
     *
     * @param string $oPTION
     * @return self
     */
    public function setOPTION(array $oPTION)
    {
        $this->oPTION = $oPTION;
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
     * Gets as dELIVERYINST
     *
     * @return string
     */
    public function getDELIVERYINST()
    {
        return $this->dELIVERYINST;
    }

    /**
     * Sets a new dELIVERYINST
     *
     * @param string $dELIVERYINST
     * @return self
     */
    public function setDELIVERYINST($dELIVERYINST)
    {
        $this->dELIVERYINST = $dELIVERYINST;
        return $this;
    }

    /**
     * Gets as cUSTOMCONTROLIN
     *
     * @return string
     */
    public function getCUSTOMCONTROLIN()
    {
        return $this->cUSTOMCONTROLIN;
    }

    /**
     * Sets a new cUSTOMCONTROLIN
     *
     * @param string $cUSTOMCONTROLIN
     * @return self
     */
    public function setCUSTOMCONTROLIN($cUSTOMCONTROLIN)
    {
        $this->cUSTOMCONTROLIN = $cUSTOMCONTROLIN;
        return $this;
    }

    /**
     * Gets as hAZARDOUS
     *
     * @return string
     */
    public function getHAZARDOUS()
    {
        return $this->hAZARDOUS;
    }

    /**
     * Sets a new hAZARDOUS
     *
     * @param string $hAZARDOUS
     * @return self
     */
    public function setHAZARDOUS($hAZARDOUS)
    {
        $this->hAZARDOUS = $hAZARDOUS;
        return $this;
    }

    /**
     * Gets as uNNUMBER
     *
     * @return string
     */
    public function getUNNUMBER()
    {
        return $this->uNNUMBER;
    }

    /**
     * Sets a new uNNUMBER
     *
     * @param string $uNNUMBER
     * @return self
     */
    public function setUNNUMBER($uNNUMBER)
    {
        $this->uNNUMBER = $uNNUMBER;
        return $this;
    }

    /**
     * Gets as pACKINGGROUP
     *
     * @return string
     */
    public function getPACKINGGROUP()
    {
        return $this->pACKINGGROUP;
    }

    /**
     * Sets a new pACKINGGROUP
     *
     * @param string $pACKINGGROUP
     * @return self
     */
    public function setPACKINGGROUP($pACKINGGROUP)
    {
        $this->pACKINGGROUP = $pACKINGGROUP;
        return $this;
    }

    /**
     * Adds as pACKAGE
     *
     * @return self
     * @param \TNTExpressConnect\Ship\XSD\Request\PACKAGE $pACKAGE
     */
    public function addToPACKAGE(\TNTExpressConnect\Ship\XSD\Request\PACKAGE $pACKAGE)
    {
        $this->pACKAGE[] = $pACKAGE;
        return $this;
    }

    /**
     * isset pACKAGE
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPACKAGE($index)
    {
        return isset($this->pACKAGE[$index]);
    }

    /**
     * unset pACKAGE
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPACKAGE($index)
    {
        unset($this->pACKAGE[$index]);
    }

    /**
     * Gets as pACKAGE
     *
     * @return \TNTExpressConnect\Ship\XSD\Request\PACKAGE[]
     */
    public function getPACKAGE()
    {
        return $this->pACKAGE;
    }

    /**
     * Sets a new pACKAGE
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\PACKAGE[] $pACKAGE
     * @return self
     */
    public function setPACKAGE(array $pACKAGE)
    {
        $this->pACKAGE = $pACKAGE;
        return $this;
    }


}

