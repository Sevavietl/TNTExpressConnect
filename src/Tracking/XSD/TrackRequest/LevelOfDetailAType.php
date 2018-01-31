<?php

namespace TNTExpressConnect\Tracking\XSD\TrackRequest;

/**
 * Class representing LevelOfDetailAType
 */
class LevelOfDetailAType
{

    /**
     * By default summary results are returned. The presence of this element signifies
     * that consignment details are to be populated along with the extra details
     * specified by the associated attributes
     *
     * @property
     * \TNTExpressConnect\Tracking\XSD\TrackRequest\LevelOfDetailAType\CompleteAType
     * $complete
     */
    private $complete = null;

    /**
     * @property \TNTExpressConnect\Serializer\AnyType $summary
     */
    private $summary = null;

    /**
     * Gets as complete
     *
     * By default summary results are returned. The presence of this element signifies
     * that consignment details are to be populated along with the extra details
     * specified by the associated attributes
     *
     * @return
     * \TNTExpressConnect\Tracking\XSD\TrackRequest\LevelOfDetailAType\CompleteAType
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * Sets a new complete
     *
     * By default summary results are returned. The presence of this element signifies
     * that consignment details are to be populated along with the extra details
     * specified by the associated attributes
     *
     * @param
     * \TNTExpressConnect\Tracking\XSD\TrackRequest\LevelOfDetailAType\CompleteAType
     * $complete
     * @return self
     */
    public function setComplete(\TNTExpressConnect\Tracking\XSD\TrackRequest\LevelOfDetailAType\CompleteAType $complete)
    {
        $this->complete = $complete;
        return $this;
    }

    /**
     * Gets as summary
     *
     * @return \TNTExpressConnect\Serializer\AnyType
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary
     *
     * @param \TNTExpressConnect\Serializer\AnyType $summary
     * @return self
     */
    public function setSummary(\TNTExpressConnect\Serializer\AnyType $summary)
    {
        $this->summary = $summary;
        return $this;
    }


}

