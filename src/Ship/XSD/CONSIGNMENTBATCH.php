<?php

namespace TNTExpressConnect\Ship\XSD;

/**
 * Class representing CONSIGNMENTBATCH
 */
class CONSIGNMENTBATCH
{

    /**
     * @property string $gROUPCODE
     */
    private $gROUPCODE = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\SENDER $sENDER
     */
    private $sENDER = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\CONSIGNMENT[] $cONSIGNMENT
     */
    private $cONSIGNMENT = array(
        
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
     * Gets as sENDER
     *
     * @return \TNTExpressConnect\Ship\XSD\SENDER
     */
    public function getSENDER()
    {
        return $this->sENDER;
    }

    /**
     * Sets a new sENDER
     *
     * @param \TNTExpressConnect\Ship\XSD\SENDER $sENDER
     * @return self
     */
    public function setSENDER(\TNTExpressConnect\Ship\XSD\SENDER $sENDER)
    {
        $this->sENDER = $sENDER;
        return $this;
    }

    /**
     * Adds as cONSIGNMENT
     *
     * @return self
     * @param \TNTExpressConnect\Ship\XSD\CONSIGNMENT $cONSIGNMENT
     */
    public function addToCONSIGNMENT(\TNTExpressConnect\Ship\XSD\CONSIGNMENT $cONSIGNMENT)
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
     * @return \TNTExpressConnect\Ship\XSD\CONSIGNMENT[]
     */
    public function getCONSIGNMENT()
    {
        return $this->cONSIGNMENT;
    }

    /**
     * Sets a new cONSIGNMENT
     *
     * @param \TNTExpressConnect\Ship\XSD\CONSIGNMENT[] $cONSIGNMENT
     * @return self
     */
    public function setCONSIGNMENT(array $cONSIGNMENT)
    {
        $this->cONSIGNMENT = $cONSIGNMENT;
        return $this;
    }


}

