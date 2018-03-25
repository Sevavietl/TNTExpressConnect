<?php

namespace TNTExpressConnect\Ship\XSD\Request;

/**
 * Class representing CONSIGNMENT
 */
class CONSIGNMENT
{

    /**
     * @property string $cONREF
     */
    private $cONREF = null;

    /**
     * @property \TNTExpressConnect\Ship\XSD\Request\DETAILS $dETAILS
     */
    private $dETAILS = null;

    /**
     * @property string $cONNUMBER
     */
    private $cONNUMBER = null;

    /**
     * Gets as cONREF
     *
     * @return string
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
    public function setCONREF($cONREF)
    {
        $this->cONREF = $cONREF;
        return $this;
    }

    /**
     * Gets as dETAILS
     *
     * @return \TNTExpressConnect\Ship\XSD\Request\DETAILS
     */
    public function getDETAILS()
    {
        return $this->dETAILS;
    }

    /**
     * Sets a new dETAILS
     *
     * @param \TNTExpressConnect\Ship\XSD\Request\DETAILS $dETAILS
     * @return self
     */
    public function setDETAILS(\TNTExpressConnect\Ship\XSD\Request\DETAILS $dETAILS)
    {
        $this->dETAILS = $dETAILS;
        return $this;
    }

    /**
     * Gets as cONNUMBER
     *
     * @return string
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
    public function setCONNUMBER($cONNUMBER)
    {
        $this->cONNUMBER = $cONNUMBER;
        return $this;
    }


}

