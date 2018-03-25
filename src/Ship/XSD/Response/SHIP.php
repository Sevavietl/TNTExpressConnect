<?php

namespace TNTExpressConnect\Ship\XSD\Response;

/**
 * Class representing SHIP
 */
class SHIP
{

    /**
     * @property \TNTExpressConnect\Ship\XSD\Response\ERROR[] $eRROR
     */
    private $eRROR = array(
        
    );

    /**
     * @property \TNTExpressConnect\Ship\XSD\Response\CONSIGNMENT[] $cONSIGNMENT
     */
    private $cONSIGNMENT = array(
        
    );

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
     * Adds as cONSIGNMENT
     *
     * @return self
     * @param \TNTExpressConnect\Ship\XSD\Response\CONSIGNMENT $cONSIGNMENT
     */
    public function addToCONSIGNMENT(\TNTExpressConnect\Ship\XSD\Response\CONSIGNMENT $cONSIGNMENT)
    {
        $this->cONSIGNMENT[] = $cONSIGNMENT;
        return $this;
    }

    /**
     * isset cONSIGNMENT
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCONSIGNMENT($index)
    {
        return isset($this->cONSIGNMENT[$index]);
    }

    /**
     * unset cONSIGNMENT
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCONSIGNMENT($index)
    {
        unset($this->cONSIGNMENT[$index]);
    }

    /**
     * Gets as cONSIGNMENT
     *
     * @return \TNTExpressConnect\Ship\XSD\Response\CONSIGNMENT[]
     */
    public function getCONSIGNMENT()
    {
        return $this->cONSIGNMENT;
    }

    /**
     * Sets a new cONSIGNMENT
     *
     * @param \TNTExpressConnect\Ship\XSD\Response\CONSIGNMENT[] $cONSIGNMENT
     * @return self
     */
    public function setCONSIGNMENT(array $cONSIGNMENT)
    {
        $this->cONSIGNMENT = $cONSIGNMENT;
        return $this;
    }


}

