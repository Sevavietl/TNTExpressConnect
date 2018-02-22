<?php

namespace TNTExpressConnect\Ship\XSD;

/**
 * Class representing PRICE
 */
class PRICE
{

    /**
     * @property string $rATEID
     */
    private $rATEID = null;

    /**
     * @property string $sERVICE
     */
    private $sERVICE = null;

    /**
     * @property string $sERVICEDESC
     */
    private $sERVICEDESC = null;

    /**
     * @property string $oPTION
     */
    private $oPTION = null;

    /**
     * @property string $oPTIONDESC
     */
    private $oPTIONDESC = null;

    /**
     * @property string $cURRENCY
     */
    private $cURRENCY = null;

    /**
     * @property float $rATE
     */
    private $rATE = null;

    /**
     * @property string $rESULT
     */
    private $rESULT = null;

    /**
     * Gets as rATEID
     *
     * @return string
     */
    public function getRATEID()
    {
        return $this->rATEID;
    }

    /**
     * Sets a new rATEID
     *
     * @param string $rATEID
     * @return self
     */
    public function setRATEID($rATEID)
    {
        $this->rATEID = $rATEID;
        return $this;
    }

    /**
     * Gets as sERVICE
     *
     * @return string
     */
    public function getSERVICE()
    {
        return $this->sERVICE;
    }

    /**
     * Sets a new sERVICE
     *
     * @param string $sERVICE
     * @return self
     */
    public function setSERVICE($sERVICE)
    {
        $this->sERVICE = $sERVICE;
        return $this;
    }

    /**
     * Gets as sERVICEDESC
     *
     * @return string
     */
    public function getSERVICEDESC()
    {
        return $this->sERVICEDESC;
    }

    /**
     * Sets a new sERVICEDESC
     *
     * @param string $sERVICEDESC
     * @return self
     */
    public function setSERVICEDESC($sERVICEDESC)
    {
        $this->sERVICEDESC = $sERVICEDESC;
        return $this;
    }

    /**
     * Gets as oPTION
     *
     * @return string
     */
    public function getOPTION()
    {
        return $this->oPTION;
    }

    /**
     * Sets a new oPTION
     *
     * @param string $oPTION
     * @return self
     */
    public function setOPTION($oPTION)
    {
        $this->oPTION = $oPTION;
        return $this;
    }

    /**
     * Gets as oPTIONDESC
     *
     * @return string
     */
    public function getOPTIONDESC()
    {
        return $this->oPTIONDESC;
    }

    /**
     * Sets a new oPTIONDESC
     *
     * @param string $oPTIONDESC
     * @return self
     */
    public function setOPTIONDESC($oPTIONDESC)
    {
        $this->oPTIONDESC = $oPTIONDESC;
        return $this;
    }

    /**
     * Gets as cURRENCY
     *
     * @return string
     */
    public function getCURRENCY()
    {
        return $this->cURRENCY;
    }

    /**
     * Sets a new cURRENCY
     *
     * @param string $cURRENCY
     * @return self
     */
    public function setCURRENCY($cURRENCY)
    {
        $this->cURRENCY = $cURRENCY;
        return $this;
    }

    /**
     * Gets as rATE
     *
     * @return float
     */
    public function getRATE()
    {
        return $this->rATE;
    }

    /**
     * Sets a new rATE
     *
     * @param float $rATE
     * @return self
     */
    public function setRATE($rATE)
    {
        $this->rATE = $rATE;
        return $this;
    }

    /**
     * Gets as rESULT
     *
     * @return string
     */
    public function getRESULT()
    {
        return $this->rESULT;
    }

    /**
     * Sets a new rESULT
     *
     * @param string $rESULT
     * @return self
     */
    public function setRESULT($rESULT)
    {
        $this->rESULT = $rESULT;
        return $this;
    }


}

