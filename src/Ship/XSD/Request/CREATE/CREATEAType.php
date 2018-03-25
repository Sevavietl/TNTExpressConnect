<?php

namespace TNTExpressConnect\Ship\XSD\Request\CREATE;

/**
 * Class representing CREATEAType
 */
class CREATEAType
{

    /**
     * @property string[] $cONREF
     */
    private $cONREF = array(
        
    );

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


}

