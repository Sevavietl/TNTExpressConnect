<?php

namespace TNTExpressConnect\Ship\XSD\Request;

/**
 * Class representing ALTCOLLECTTIME
 */
class ALTCOLLECTTIME
{

    /**
     * @property string $fROM
     */
    private $fROM = null;

    /**
     * @property string $tO
     */
    private $tO = null;

    /**
     * Gets as fROM
     *
     * @return string
     */
    public function getFROM()
    {
        return $this->fROM;
    }

    /**
     * Sets a new fROM
     *
     * @param string $fROM
     * @return self
     */
    public function setFROM($fROM)
    {
        $this->fROM = $fROM;
        return $this;
    }

    /**
     * Gets as tO
     *
     * @return string
     */
    public function getTO()
    {
        return $this->tO;
    }

    /**
     * Sets a new tO
     *
     * @param string $tO
     * @return self
     */
    public function setTO($tO)
    {
        $this->tO = $tO;
        return $this;
    }


}

