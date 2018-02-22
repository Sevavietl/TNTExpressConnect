<?php

namespace TNTExpressConnect\Ship\XSD;

/**
 * Class representing PRINT
 */
class PRINT
{

    /**
     * @property \TNTExpressConnect\Ship\XSD\REQUIRED $rEQUIRED
     */
    private $rEQUIRED = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\CONNOTE $cONNOTE
     */
    private $cONNOTE = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\LABEL $lABEL
     */
    private $lABEL = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\MANIFEST $mANIFEST
     */
    private $mANIFEST = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\INVOICE $iNVOICE
     */
    private $iNVOICE = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\EMAILTO $eMAILTO
     */
    private $eMAILTO = null;

    /**
     * @property string $eMAILFROM
     */
    private $eMAILFROM = null;

    /**
     * Gets as rEQUIRED
     *
     * @return \TNTExpressConnect\Ship\XSD\REQUIRED
     */
    public function getREQUIRED()
    {
        return $this->rEQUIRED;
    }

    /**
     * Sets a new rEQUIRED
     *
     * @param \TNTExpressConnect\Ship\XSD\REQUIRED $rEQUIRED
     * @return self
     */
    public function setREQUIRED(\TNTExpressConnect\Ship\XSD\REQUIRED $rEQUIRED)
    {
        $this->rEQUIRED = $rEQUIRED;
        return $this;
    }

    /**
     * Gets as cONNOTE
     *
     * @return \TNTExpressConnect\Ship\XSD\CONNOTE
     */
    public function getCONNOTE()
    {
        return $this->cONNOTE;
    }

    /**
     * Sets a new cONNOTE
     *
     * @param \TNTExpressConnect\Ship\XSD\CONNOTE $cONNOTE
     * @return self
     */
    public function setCONNOTE(\TNTExpressConnect\Ship\XSD\CONNOTE $cONNOTE)
    {
        $this->cONNOTE = $cONNOTE;
        return $this;
    }

    /**
     * Gets as lABEL
     *
     * @return \TNTExpressConnect\Ship\XSD\LABEL
     */
    public function getLABEL()
    {
        return $this->lABEL;
    }

    /**
     * Sets a new lABEL
     *
     * @param \TNTExpressConnect\Ship\XSD\LABEL $lABEL
     * @return self
     */
    public function setLABEL(\TNTExpressConnect\Ship\XSD\LABEL $lABEL)
    {
        $this->lABEL = $lABEL;
        return $this;
    }

    /**
     * Gets as mANIFEST
     *
     * @return \TNTExpressConnect\Ship\XSD\MANIFEST
     */
    public function getMANIFEST()
    {
        return $this->mANIFEST;
    }

    /**
     * Sets a new mANIFEST
     *
     * @param \TNTExpressConnect\Ship\XSD\MANIFEST $mANIFEST
     * @return self
     */
    public function setMANIFEST(\TNTExpressConnect\Ship\XSD\MANIFEST $mANIFEST)
    {
        $this->mANIFEST = $mANIFEST;
        return $this;
    }

    /**
     * Gets as iNVOICE
     *
     * @return \TNTExpressConnect\Ship\XSD\INVOICE
     */
    public function getINVOICE()
    {
        return $this->iNVOICE;
    }

    /**
     * Sets a new iNVOICE
     *
     * @param \TNTExpressConnect\Ship\XSD\INVOICE $iNVOICE
     * @return self
     */
    public function setINVOICE(\TNTExpressConnect\Ship\XSD\INVOICE $iNVOICE)
    {
        $this->iNVOICE = $iNVOICE;
        return $this;
    }

    /**
     * Gets as eMAILTO
     *
     * @return \TNTExpressConnect\Ship\XSD\EMAILTO
     */
    public function getEMAILTO()
    {
        return $this->eMAILTO;
    }

    /**
     * Sets a new eMAILTO
     *
     * @param \TNTExpressConnect\Ship\XSD\EMAILTO $eMAILTO
     * @return self
     */
    public function setEMAILTO(\TNTExpressConnect\Ship\XSD\EMAILTO $eMAILTO)
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

