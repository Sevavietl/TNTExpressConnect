<?php

namespace TNTExpressConnect\Ship\XSD\Response;

/**
 * Class representing PRINTXsd
 */
class PRINTXsd
{

    /**
     * @property \TNTExpressConnect\Ship\XSD\Response\ERROR[] $eRROR
     */
    private $eRROR = array(
        
    );

    /**
     * @property \TNTExpressConnect\Ship\XSD\Response\ERROR[] $cONNOTE
     */
    private $cONNOTE = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Response\ERROR[] $lABEL
     */
    private $lABEL = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Response\ERROR[] $mANIFEST
     */
    private $mANIFEST = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Response\ERROR[] $iNVOICE
     */
    private $iNVOICE = null;

    /**
     * @property string $eMAILTO
     */
    private $eMAILTO = null;

    /**
     * @property string $eMAILFROM
     */
    private $eMAILFROM = null;

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

    /**
     * Adds as eRROR
     *
     * @return self
     * @param \TNTExpressConnect\Ship\XSD\Response\ERROR $eRROR
     */
    public function addToCONNOTE(\TNTExpressConnect\Ship\XSD\Response\ERROR $eRROR)
    {
        $this->cONNOTE[] = $eRROR;
        return $this;
    }

    /**
     * isset cONNOTE
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCONNOTE($index)
    {
        return isset($this->cONNOTE[$index]);
    }

    /**
     * unset cONNOTE
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCONNOTE($index)
    {
        unset($this->cONNOTE[$index]);
    }

    /**
     * Gets as cONNOTE
     *
     * @return \TNTExpressConnect\Ship\XSD\Response\ERROR[]
     */
    public function getCONNOTE()
    {
        return $this->cONNOTE;
    }

    /**
     * Sets a new cONNOTE
     *
     * @param \TNTExpressConnect\Ship\XSD\Response\ERROR[] $cONNOTE
     * @return self
     */
    public function setCONNOTE(array $cONNOTE)
    {
        $this->cONNOTE = $cONNOTE;
        return $this;
    }

    /**
     * Adds as eRROR
     *
     * @return self
     * @param \TNTExpressConnect\Ship\XSD\Response\ERROR $eRROR
     */
    public function addToLABEL(\TNTExpressConnect\Ship\XSD\Response\ERROR $eRROR)
    {
        $this->lABEL[] = $eRROR;
        return $this;
    }

    /**
     * isset lABEL
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLABEL($index)
    {
        return isset($this->lABEL[$index]);
    }

    /**
     * unset lABEL
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLABEL($index)
    {
        unset($this->lABEL[$index]);
    }

    /**
     * Gets as lABEL
     *
     * @return \TNTExpressConnect\Ship\XSD\Response\ERROR[]
     */
    public function getLABEL()
    {
        return $this->lABEL;
    }

    /**
     * Sets a new lABEL
     *
     * @param \TNTExpressConnect\Ship\XSD\Response\ERROR[] $lABEL
     * @return self
     */
    public function setLABEL(array $lABEL)
    {
        $this->lABEL = $lABEL;
        return $this;
    }

    /**
     * Adds as eRROR
     *
     * @return self
     * @param \TNTExpressConnect\Ship\XSD\Response\ERROR $eRROR
     */
    public function addToMANIFEST(\TNTExpressConnect\Ship\XSD\Response\ERROR $eRROR)
    {
        $this->mANIFEST[] = $eRROR;
        return $this;
    }

    /**
     * isset mANIFEST
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMANIFEST($index)
    {
        return isset($this->mANIFEST[$index]);
    }

    /**
     * unset mANIFEST
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMANIFEST($index)
    {
        unset($this->mANIFEST[$index]);
    }

    /**
     * Gets as mANIFEST
     *
     * @return \TNTExpressConnect\Ship\XSD\Response\ERROR[]
     */
    public function getMANIFEST()
    {
        return $this->mANIFEST;
    }

    /**
     * Sets a new mANIFEST
     *
     * @param \TNTExpressConnect\Ship\XSD\Response\ERROR[] $mANIFEST
     * @return self
     */
    public function setMANIFEST(array $mANIFEST)
    {
        $this->mANIFEST = $mANIFEST;
        return $this;
    }

    /**
     * Adds as eRROR
     *
     * @return self
     * @param \TNTExpressConnect\Ship\XSD\Response\ERROR $eRROR
     */
    public function addToINVOICE(\TNTExpressConnect\Ship\XSD\Response\ERROR $eRROR)
    {
        $this->iNVOICE[] = $eRROR;
        return $this;
    }

    /**
     * isset iNVOICE
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetINVOICE($index)
    {
        return isset($this->iNVOICE[$index]);
    }

    /**
     * unset iNVOICE
     *
     * @param scalar $index
     * @return void
     */
    public function unsetINVOICE($index)
    {
        unset($this->iNVOICE[$index]);
    }

    /**
     * Gets as iNVOICE
     *
     * @return \TNTExpressConnect\Ship\XSD\Response\ERROR[]
     */
    public function getINVOICE()
    {
        return $this->iNVOICE;
    }

    /**
     * Sets a new iNVOICE
     *
     * @param \TNTExpressConnect\Ship\XSD\Response\ERROR[] $iNVOICE
     * @return self
     */
    public function setINVOICE(array $iNVOICE)
    {
        $this->iNVOICE = $iNVOICE;
        return $this;
    }

    /**
     * Gets as eMAILTO
     *
     * @return string
     */
    public function getEMAILTO()
    {
        return $this->eMAILTO;
    }

    /**
     * Sets a new eMAILTO
     *
     * @param string $eMAILTO
     * @return self
     */
    public function setEMAILTO($eMAILTO)
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

