<?php

namespace TNTExpressConnect\Ship\XSD;

/**
 * Class representing RATE
 */
class RATE
{

    /**
     * @property \TNTExpressConnect\Ship\XSD\ERROR[] $eRROR
     */
    private $eRROR = array(
        
    );

    /**
     * @property \TNTExpressConnect\Ship\XSD\PRICE[] $pRICE
     */
    private $pRICE = array(
        
    );

    /**
     * Adds as eRROR
     *
     * @return self
     * @param \TNTExpressConnect\Ship\XSD\ERROR $eRROR
     */
    public function addToERROR(\TNTExpressConnect\Ship\XSD\ERROR $eRROR)
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
     * @return \TNTExpressConnect\Ship\XSD\ERROR[]
     */
    public function getERROR()
    {
        return $this->eRROR;
    }

    /**
     * Sets a new eRROR
     *
     * @param \TNTExpressConnect\Ship\XSD\ERROR[] $eRROR
     * @return self
     */
    public function setERROR(array $eRROR)
    {
        $this->eRROR = $eRROR;
        return $this;
    }

    /**
     * Adds as pRICE
     *
     * @return self
     * @param \TNTExpressConnect\Ship\XSD\PRICE $pRICE
     */
    public function addToPRICE(\TNTExpressConnect\Ship\XSD\PRICE $pRICE)
    {
        $this->pRICE[] = $pRICE;
        return $this;
    }

    /**
     * isset pRICE
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPRICE($index)
    {
        return isset($this->pRICE[$index]);
    }

    /**
     * unset pRICE
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPRICE($index)
    {
        unset($this->pRICE[$index]);
    }

    /**
     * Gets as pRICE
     *
     * @return \TNTExpressConnect\Ship\XSD\PRICE[]
     */
    public function getPRICE()
    {
        return $this->pRICE;
    }

    /**
     * Sets a new pRICE
     *
     * @param \TNTExpressConnect\Ship\XSD\PRICE[] $pRICE
     * @return self
     */
    public function setPRICE(array $pRICE)
    {
        $this->pRICE = $pRICE;
        return $this;
    }


}

