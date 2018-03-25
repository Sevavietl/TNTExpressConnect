<?php

namespace TNTExpressConnect\Ship\XSD\Request;

/**
 * Class representing ESHIPPER
 */
class ESHIPPER
{

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\LOGIN $lOGIN
     */
    private $lOGIN = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\CONSIGNMENTBATCH $cONSIGNMENTBATCH
     */
    private $cONSIGNMENTBATCH = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\ACTIVITY $aCTIVITY
     */
    private $aCTIVITY = null;

    /**
     * Gets as lOGIN
     *
     * @return \TNTExpressConnect\Ship\XSD\Request\LOGIN
     */
    public function getLOGIN()
    {
        return $this->lOGIN;
    }

    /**
     * Sets a new lOGIN
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\LOGIN $lOGIN
     * @return self
     */
    public function setLOGIN(\TNTExpressConnect\Ship\XSD\Request\LOGIN $lOGIN)
    {
        $this->lOGIN = $lOGIN;
        return $this;
    }

    /**
     * Gets as cONSIGNMENTBATCH
     *
     * @return \TNTExpressConnect\Ship\XSD\Request\CONSIGNMENTBATCH
     */
    public function getCONSIGNMENTBATCH()
    {
        return $this->cONSIGNMENTBATCH;
    }

    /**
     * Sets a new cONSIGNMENTBATCH
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\CONSIGNMENTBATCH $cONSIGNMENTBATCH
     * @return self
     */
    public function setCONSIGNMENTBATCH(\TNTExpressConnect\Ship\XSD\Request\CONSIGNMENTBATCH $cONSIGNMENTBATCH)
    {
        $this->cONSIGNMENTBATCH = $cONSIGNMENTBATCH;
        return $this;
    }

    /**
     * Gets as aCTIVITY
     *
     * @return \TNTExpressConnect\Ship\XSD\Request\ACTIVITY
     */
    public function getACTIVITY()
    {
        return $this->aCTIVITY;
    }

    /**
     * Sets a new aCTIVITY
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\ACTIVITY $aCTIVITY
     * @return self
     */
    public function setACTIVITY(\TNTExpressConnect\Ship\XSD\Request\ACTIVITY $aCTIVITY)
    {
        $this->aCTIVITY = $aCTIVITY;
        return $this;
    }


}

