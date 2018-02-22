<?php

namespace TNTExpressConnect\Ship\XSD;

/**
 * Class representing BOOK
 */
class BOOK
{

    /**
     * @property string $eMAILREQD
     */
    private $eMAILREQD = null;

    /**
     * @property string $showBookingRef
     */
    private $showBookingRef = null;

    /**
     * @property string $faxNumber
     */
    private $faxNumber = null;

    /**
     * @property string $languageId
     */
    private $languageId = null;

    /**
     * @property string $printAtDepot
     */
    private $printAtDepot = null;

    /**
     * @property string $gROUPCODE
     */
    private $gROUPCODE = null;

    /**
     * @property string[] $cONREF
     */
    private $cONREF = array(
        
    );

    /**
     * @property string[] $cONNUMBER
     */
    private $cONNUMBER = array(
        
    );

    /**
     * Gets as eMAILREQD
     *
     * @return string
     */
    public function getEMAILREQD()
    {
        return $this->eMAILREQD;
    }

    /**
     * Sets a new eMAILREQD
     *
     * @param string $eMAILREQD
     * @return self
     */
    public function setEMAILREQD($eMAILREQD)
    {
        $this->eMAILREQD = $eMAILREQD;
        return $this;
    }

    /**
     * Gets as showBookingRef
     *
     * @return string
     */
    public function getShowBookingRef()
    {
        return $this->showBookingRef;
    }

    /**
     * Sets a new showBookingRef
     *
     * @param string $showBookingRef
     * @return self
     */
    public function setShowBookingRef($showBookingRef)
    {
        $this->showBookingRef = $showBookingRef;
        return $this;
    }

    /**
     * Gets as faxNumber
     *
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * Sets a new faxNumber
     *
     * @param string $faxNumber
     * @return self
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    /**
     * Gets as languageId
     *
     * @return string
     */
    public function getLanguageId()
    {
        return $this->languageId;
    }

    /**
     * Sets a new languageId
     *
     * @param string $languageId
     * @return self
     */
    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;
        return $this;
    }

    /**
     * Gets as printAtDepot
     *
     * @return string
     */
    public function getPrintAtDepot()
    {
        return $this->printAtDepot;
    }

    /**
     * Sets a new printAtDepot
     *
     * @param string $printAtDepot
     * @return self
     */
    public function setPrintAtDepot($printAtDepot)
    {
        $this->printAtDepot = $printAtDepot;
        return $this;
    }

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
     * Adds as cONREF
     *
     * @return self
     * @param string $cONREF
     */
    public function addToCONREF($cONREF)
    {
        $this->cONREF[] = $cONREF;
        return $this;
    }

    /**
     * isset cONREF
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCONREF($index)
    {
        return isset($this->cONREF[$index]);
    }

    /**
     * unset cONREF
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCONREF($index)
    {
        unset($this->cONREF[$index]);
    }

    /**
     * Gets as cONREF
     *
     * @return string[]
     */
    public function getCONREF()
    {
        return $this->cONREF;
    }

    /**
     * Sets a new cONREF
     *
     * @param string $cONREF
     * @return self
     */
    public function setCONREF(array $cONREF)
    {
        $this->cONREF = $cONREF;
        return $this;
    }

    /**
     * Adds as cONNUMBER
     *
     * @return self
     * @param string $cONNUMBER
     */
    public function addToCONNUMBER($cONNUMBER)
    {
        $this->cONNUMBER[] = $cONNUMBER;
        return $this;
    }

    /**
     * isset cONNUMBER
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCONNUMBER($index)
    {
        return isset($this->cONNUMBER[$index]);
    }

    /**
     * unset cONNUMBER
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCONNUMBER($index)
    {
        unset($this->cONNUMBER[$index]);
    }

    /**
     * Gets as cONNUMBER
     *
     * @return string[]
     */
    public function getCONNUMBER()
    {
        return $this->cONNUMBER;
    }

    /**
     * Sets a new cONNUMBER
     *
     * @param string $cONNUMBER
     * @return self
     */
    public function setCONNUMBER(array $cONNUMBER)
    {
        $this->cONNUMBER = $cONNUMBER;
        return $this;
    }


}

