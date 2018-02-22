<?php

namespace TNTExpressConnect\Ship\XSD;

/**
 * Class representing ESHIPPER
 */
class ESHIPPER
{

    /**
     * @property \TNTExpressConnect\Ship\XSD\LOGIN $lOGIN
     */
    private $lOGIN = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\CONSIGNMENTBATCH $cONSIGNMENTBATCH
     */
    private $cONSIGNMENTBATCH = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\ACTIVITY $aCTIVITY
     */
    private $aCTIVITY = null;

    /**
     * Gets as lOGIN
     *
     * @return \TNTExpressConnect\Ship\XSD\LOGIN
     */
    public function getLOGIN()
    {
        return $this->lOGIN;
    }

    /**
     * Sets a new lOGIN
     *
     * @param \TNTExpressConnect\Ship\XSD\LOGIN $lOGIN
     * @return self
     */
    public function setLOGIN(\TNTExpressConnect\Ship\XSD\LOGIN $lOGIN)
    {
        $this->lOGIN = $lOGIN;
        return $this;
    }

    /**
     * Gets as cONSIGNMENTBATCH
     *
     * @return \TNTExpressConnect\Ship\XSD\CONSIGNMENTBATCH
     */
    public function getCONSIGNMENTBATCH()
    {
        return $this->cONSIGNMENTBATCH;
    }

    /**
     * Sets a new cONSIGNMENTBATCH
     *
     * @param \TNTExpressConnect\Ship\XSD\CONSIGNMENTBATCH $cONSIGNMENTBATCH
     * @return self
     */
    public function setCONSIGNMENTBATCH(\TNTExpressConnect\Ship\XSD\CONSIGNMENTBATCH $cONSIGNMENTBATCH)
    {
        $this->cONSIGNMENTBATCH = $cONSIGNMENTBATCH;
        return $this;
    }

    /**
     * Gets as aCTIVITY
     *
     * @return \TNTExpressConnect\Ship\XSD\ACTIVITY
     */
    public function getACTIVITY()
    {
        return $this->aCTIVITY;
    }

    /**
     * Sets a new aCTIVITY
     *
     * @param \TNTExpressConnect\Ship\XSD\ACTIVITY $aCTIVITY
     * @return self
     */
    public function setACTIVITY(\TNTExpressConnect\Ship\XSD\ACTIVITY $aCTIVITY)
    {
        $this->aCTIVITY = $aCTIVITY;
        return $this;
    }


}

