<?php

namespace TNTExpressConnect\Ship\XSD;

/**
 * Class representing COLLECTION
 */
class COLLECTION
{

    /**
     * @property \TNTExpressConnect\Ship\XSD\COLLECTIONADDRESS $cOLLECTIONADDRESS
     */
    private $cOLLECTIONADDRESS = null;

    /**
     * @property string $sHIPDATE
     */
    private $sHIPDATE = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\PREFCOLLECTTIME $pREFCOLLECTTIME
     */
    private $pREFCOLLECTTIME = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\ALTCOLLECTTIME $aLTCOLLECTTIME
     */
    private $aLTCOLLECTTIME = null;

    /**
     * @property string $cOLLINSTRUCTIONS
     */
    private $cOLLINSTRUCTIONS = null;

    /**
     * @property string $cONFIRMATIONEMAILADDRESS
     */
    private $cONFIRMATIONEMAILADDRESS = null;

    /**
     * Gets as cOLLECTIONADDRESS
     *
     * @return \TNTExpressConnect\Ship\XSD\COLLECTIONADDRESS
     */
    public function getCOLLECTIONADDRESS()
    {
        return $this->cOLLECTIONADDRESS;
    }

    /**
     * Sets a new cOLLECTIONADDRESS
     *
     * @param \TNTExpressConnect\Ship\XSD\COLLECTIONADDRESS $cOLLECTIONADDRESS
     * @return self
     */
    public function setCOLLECTIONADDRESS(\TNTExpressConnect\Ship\XSD\COLLECTIONADDRESS $cOLLECTIONADDRESS)
    {
        $this->cOLLECTIONADDRESS = $cOLLECTIONADDRESS;
        return $this;
    }

    /**
     * Gets as sHIPDATE
     *
     * @return string
     */
    public function getSHIPDATE()
    {
        return $this->sHIPDATE;
    }

    /**
     * Sets a new sHIPDATE
     *
     * @param string $sHIPDATE
     * @return self
     */
    public function setSHIPDATE($sHIPDATE)
    {
        $this->sHIPDATE = $sHIPDATE;
        return $this;
    }

    /**
     * Gets as pREFCOLLECTTIME
     *
     * @return \TNTExpressConnect\Ship\XSD\PREFCOLLECTTIME
     */
    public function getPREFCOLLECTTIME()
    {
        return $this->pREFCOLLECTTIME;
    }

    /**
     * Sets a new pREFCOLLECTTIME
     *
     * @param \TNTExpressConnect\Ship\XSD\PREFCOLLECTTIME $pREFCOLLECTTIME
     * @return self
     */
    public function setPREFCOLLECTTIME(\TNTExpressConnect\Ship\XSD\PREFCOLLECTTIME $pREFCOLLECTTIME)
    {
        $this->pREFCOLLECTTIME = $pREFCOLLECTTIME;
        return $this;
    }

    /**
     * Gets as aLTCOLLECTTIME
     *
     * @return \TNTExpressConnect\Ship\XSD\ALTCOLLECTTIME
     */
    public function getALTCOLLECTTIME()
    {
        return $this->aLTCOLLECTTIME;
    }

    /**
     * Sets a new aLTCOLLECTTIME
     *
     * @param \TNTExpressConnect\Ship\XSD\ALTCOLLECTTIME $aLTCOLLECTTIME
     * @return self
     */
    public function setALTCOLLECTTIME(\TNTExpressConnect\Ship\XSD\ALTCOLLECTTIME $aLTCOLLECTTIME)
    {
        $this->aLTCOLLECTTIME = $aLTCOLLECTTIME;
        return $this;
    }

    /**
     * Gets as cOLLINSTRUCTIONS
     *
     * @return string
     */
    public function getCOLLINSTRUCTIONS()
    {
        return $this->cOLLINSTRUCTIONS;
    }

    /**
     * Sets a new cOLLINSTRUCTIONS
     *
     * @param string $cOLLINSTRUCTIONS
     * @return self
     */
    public function setCOLLINSTRUCTIONS($cOLLINSTRUCTIONS)
    {
        $this->cOLLINSTRUCTIONS = $cOLLINSTRUCTIONS;
        return $this;
    }

    /**
     * Gets as cONFIRMATIONEMAILADDRESS
     *
     * @return string
     */
    public function getCONFIRMATIONEMAILADDRESS()
    {
        return $this->cONFIRMATIONEMAILADDRESS;
    }

    /**
     * Sets a new cONFIRMATIONEMAILADDRESS
     *
     * @param string $cONFIRMATIONEMAILADDRESS
     * @return self
     */
    public function setCONFIRMATIONEMAILADDRESS($cONFIRMATIONEMAILADDRESS)
    {
        $this->cONFIRMATIONEMAILADDRESS = $cONFIRMATIONEMAILADDRESS;
        return $this;
    }


}

