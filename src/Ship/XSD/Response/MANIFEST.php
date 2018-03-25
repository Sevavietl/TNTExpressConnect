<?php

namespace TNTExpressConnect\Ship\XSD\Response;

/**
 * Class representing MANIFEST
 */
class MANIFEST
{

    /**
     * @property \TNTExpressConnect\Ship\XSD\Response\ERROR[] $eRROR
     */
    private $eRROR = array(
        
    );

    /**
     * Adds as eRROR
     *
     * @return self
     * @param \TNTExpressConnect\Ship\XSD\Response\ERROR $eRROR
     */
    public function addToERROR(\TNTExpressConnect\Ship\XSD\Response\ERROR $eRROR)
    {
        $this->eRROR[] = $eRROR;
        return $this;
    }

    /**
     * isset eRROR
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetERROR($index)
    {
        return isset($this->eRROR[$index]);
    }

    /**
     * unset eRROR
     *
     * @param scalar $index
     * @return void
     */
    public function unsetERROR($index)
    {
        unset($this->eRROR[$index]);
    }

    /**
     * Gets as eRROR
     *
     * @return \TNTExpressConnect\Ship\XSD\Response\ERROR[]
     */
    public function getERROR()
    {
        return $this->eRROR;
    }

    /**
     * Sets a new eRROR
     *
     * @param \TNTExpressConnect\Ship\XSD\Response\ERROR[] $eRROR
     * @return self
     */
    public function setERROR(array $eRROR)
    {
        $this->eRROR = $eRROR;
        return $this;
    }


}

