<?php

namespace TNTExpressConnect\Ship\XSD\Request;

/**
 * Class representing PRINTXsd
 */
class PRINTXsd
{

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\REQUIRED $rEQUIRED
     */
    private $rEQUIRED = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\CONNOTE $cONNOTE
     */
    private $cONNOTE = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\LABEL $lABEL
     */
    private $lABEL = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\MANIFEST $mANIFEST
     */
    private $mANIFEST = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\INVOICE $iNVOICE
     */
    private $iNVOICE = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\EMAILTO $eMAILTO
     */
    private $eMAILTO = null;

    /**
     * @property string $eMAILFROM
     */
    private $eMAILFROM = null;

    /**
     * Gets as rEQUIRED
     *
     * @return \TNTExpressConnect\Ship\XSD\Request\REQUIRED
     */
    public function getREQUIRED()
    {
        return $this->rEQUIRED;
    }

    /**
     * Sets a new rEQUIRED
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\REQUIRED $rEQUIRED
     * @return self
     */
    public function setREQUIRED(\TNTExpressConnect\Ship\XSD\Request\REQUIRED $rEQUIRED)
    {
        $this->rEQUIRED = $rEQUIRED;
        return $this;
    }

    /**
     * Gets as cONNOTE
     *
     * @return \TNTExpressConnect\Ship\XSD\Request\CONNOTE
     */
    public function getCONNOTE()
    {
        return $this->cONNOTE;
    }

    /**
     * Sets a new cONNOTE
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\CONNOTE $cONNOTE
     * @return self
     */
    public function setCONNOTE(\TNTExpressConnect\Ship\XSD\Request\CONNOTE $cONNOTE)
    {
        $this->cONNOTE = $cONNOTE;
        return $this;
    }

    /**
     * Gets as lABEL
     *
     * @return \TNTExpressConnect\Ship\XSD\Request\LABEL
     */
    public function getLABEL()
    {
        return $this->lABEL;
    }

    /**
     * Sets a new lABEL
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\LABEL $lABEL
     * @return self
     */
    public function setLABEL(\TNTExpressConnect\Ship\XSD\Request\LABEL $lABEL)
    {
        $this->lABEL = $lABEL;
        return $this;
    }

    /**
     * Gets as mANIFEST
     *
     * @return \TNTExpressConnect\Ship\XSD\Request\MANIFEST
     */
    public function getMANIFEST()
    {
        return $this->mANIFEST;
    }

    /**
     * Sets a new mANIFEST
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\MANIFEST $mANIFEST
     * @return self
     */
    public function setMANIFEST(\TNTExpressConnect\Ship\XSD\Request\MANIFEST $mANIFEST)
    {
        $this->mANIFEST = $mANIFEST;
        return $this;
    }

    /**
     * Gets as iNVOICE
     *
     * @return \TNTExpressConnect\Ship\XSD\Request\INVOICE
     */
    public function getINVOICE()
    {
        return $this->iNVOICE;
    }

    /**
     * Sets a new iNVOICE
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\INVOICE $iNVOICE
     * @return self
     */
    public function setINVOICE(\TNTExpressConnect\Ship\XSD\Request\INVOICE $iNVOICE)
    {
        $this->iNVOICE = $iNVOICE;
        return $this;
    }

    /**
     * Gets as eMAILTO
     *
     * @return \TNTExpressConnect\Ship\XSD\Request\EMAILTO
     */
    public function getEMAILTO()
    {
        return $this->eMAILTO;
    }

    /**
     * Sets a new eMAILTO
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\EMAILTO $eMAILTO
     * @return self
     */
    public function setEMAILTO(\TNTExpressConnect\Ship\XSD\Request\EMAILTO $eMAILTO)
    {
        $this->eMAILTO = $eMAILTO;
        return $this;
    }

    /**
     * Gets as eMAILFROM
     *
     * @return string
     */
    public function getEMAILFROM()
    {
        return $this->eMAILFROM;
    }

    /**
     * Sets a new eMAILFROM
     *
     * @param string $eMAILFROM
     * @return self
     */
    public function setEMAILFROM($eMAILFROM)
    {
        $this->eMAILFROM = $eMAILFROM;
        return $this;
    }


}

