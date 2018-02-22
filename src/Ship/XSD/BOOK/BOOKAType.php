<?php

namespace TNTExpressConnect\Ship\XSD\BOOK;

/**
 * Class representing BOOKAType
 */
class BOOKAType
{

    /**
     * @property \TNTExpressConnect\Ship\XSD\CONSIGNMENT[] $cONSIGNMENT
     */
    private $cONSIGNMENT = array(
        
    );

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

