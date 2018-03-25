<?php

namespace TNTExpressConnect\Ship\XSD\Request;

/**
 * Class representing COLLECTION
 */
class COLLECTION
{

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\COLLECTIONADDRESS $cOLLECTIONADDRESS
     */
    private $cOLLECTIONADDRESS = null;

    /**
     * @property string $sHIPDATE
     */
    private $sHIPDATE = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\PREFCOLLECTTIME $pREFCOLLECTTIME
     */
    private $pREFCOLLECTTIME = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\ALTCOLLECTTIME $aLTCOLLECTTIME
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
     * @return \TNTExpressConnect\Ship\XSD\Request\COLLECTIONADDRESS
     */
    public function getCOLLECTIONADDRESS()
    {
        return $this->cOLLECTIONADDRESS;
    }

    /**
     * Sets a new cOLLECTIONADDRESS
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\COLLECTIONADDRESS $cOLLECTIONADDRESS
     * @return self
     */
    public function setCOLLECTIONADDRESS(\TNTExpressConnect\Ship\XSD\Request\COLLECTIONADDRESS $cOLLECTIONADDRESS)
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
     * @return \TNTExpressConnect\Ship\XSD\Request\PREFCOLLECTTIME
     */
    public function getPREFCOLLECTTIME()
    {
        return $this->pREFCOLLECTTIME;
    }

    /**
     * Sets a new pREFCOLLECTTIME
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\PREFCOLLECTTIME $pREFCOLLECTTIME
     * @return self
     */
    public function setPREFCOLLECTTIME(\TNTExpressConnect\Ship\XSD\Request\PREFCOLLECTTIME $pREFCOLLECTTIME)
    {
        $this->pREFCOLLECTTIME = $pREFCOLLECTTIME;
        return $this;
    }

    /**
     * Gets as aLTCOLLECTTIME
     *
     * @return \TNTExpressConnect\Ship\XSD\Request\ALTCOLLECTTIME
     */
    public function getALTCOLLECTTIME()
    {
        return $this->aLTCOLLECTTIME;
    }

    /**
     * Sets a new aLTCOLLECTTIME
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\ALTCOLLECTTIME $aLTCOLLECTTIME
     * @return self
     */
    public function setALTCOLLECTTIME(\TNTExpressConnect\Ship\XSD\Request\ALTCOLLECTTIME $aLTCOLLECTTIME)
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

