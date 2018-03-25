<?php

namespace TNTExpressConnect\Ship\XSD\Request;

/**
 * Class representing ARTICLE
 */
class ARTICLE
{

    /**
     * @property integer $iTEMS
     */
    private $iTEMS = null;

    /**
     * @property string $dESCRIPTION
     */
    private $dESCRIPTION = null;

    /**
     * @property float $wEIGHT
     */
    private $wEIGHT = null;

    /**
     * @property float $iNVOICEVALUE
     */
    private $iNVOICEVALUE = null;

    /**
     * @property string $iNVOICEDESC
     */
    private $iNVOICEDESC = null;

    /**
     * @property string $hTS
     */
    private $hTS = null;

    /**
     * @property string $cOUNTRY
     */
    private $cOUNTRY = null;

    /**
     * @property string $eMRN
     */
    private $eMRN = null;

    /**
     * Gets as iTEMS
     *
     * @return integer
     */
    public function getITEMS()
    {
        return $this->iTEMS;
    }

    /**
     * Sets a new iTEMS
     *
     * @param integer $iTEMS
     * @return self
     */
    public function setITEMS($iTEMS)
    {
        $this->iTEMS = $iTEMS;
        return $this;
    }

    /**
     * Gets as dESCRIPTION
     *
     * @return string
     */
    public function getDESCRIPTION()
    {
        return $this->dESCRIPTION;
    }

    /**
     * Sets a new dESCRIPTION
     *
     * @param string $dESCRIPTION
     * @return self
     */
    public function setDESCRIPTION($dESCRIPTION)
    {
        $this->dESCRIPTION = $dESCRIPTION;
        return $this;
    }

    /**
     * Gets as wEIGHT
     *
     * @return float
     */
    public function getWEIGHT()
    {
        return $this->wEIGHT;
    }

    /**
     * Sets a new wEIGHT
     *
     * @param float $wEIGHT
     * @return self
     */
    public function setWEIGHT($wEIGHT)
    {
        $this->wEIGHT = $wEIGHT;
        return $this;
    }

    /**
     * Gets as iNVOICEVALUE
     *
     * @return float
     */
    public function getINVOICEVALUE()
    {
        return $this->iNVOICEVALUE;
    }

    /**
     * Sets a new iNVOICEVALUE
     *
     * @param float $iNVOICEVALUE
     * @return self
     */
    public function setINVOICEVALUE($iNVOICEVALUE)
    {
        $this->iNVOICEVALUE = $iNVOICEVALUE;
        return $this;
    }

    /**
     * Gets as iNVOICEDESC
     *
     * @return string
     */
    public function getINVOICEDESC()
    {
        return $this->iNVOICEDESC;
    }

    /**
     * Sets a new iNVOICEDESC
     *
     * @param string $iNVOICEDESC
     * @return self
     */
    public function setINVOICEDESC($iNVOICEDESC)
    {
        $this->iNVOICEDESC = $iNVOICEDESC;
        return $this;
    }

    /**
     * Gets as hTS
     *
     * @return string
     */
    public function getHTS()
    {
        return $this->hTS;
    }

    /**
     * Sets a new hTS
     *
     * @param string $hTS
     * @return self
     */
    public function setHTS($hTS)
    {
        $this->hTS = $hTS;
        return $this;
    }

    /**
     * Gets as cOUNTRY
     *
     * @return string
     */
    public function getCOUNTRY()
    {
        return $this->cOUNTRY;
    }

    /**
     * Sets a new cOUNTRY
     *
     * @param string $cOUNTRY
     * @return self
     */
    public function setCOUNTRY($cOUNTRY)
    {
        $this->cOUNTRY = $cOUNTRY;
        return $this;
    }

    /**
     * Gets as eMRN
     *
     * @return string
     */
    public function getEMRN()
    {
        return $this->eMRN;
    }

    /**
     * Sets a new eMRN
     *
     * @param string $eMRN
     * @return self
     */
    public function setEMRN($eMRN)
    {
        $this->eMRN = $eMRN;
        return $this;
    }


}

