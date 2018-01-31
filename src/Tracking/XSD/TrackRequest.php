<?php

namespace TNTExpressConnect\Tracking\XSD;

/**
 * Class representing TrackRequest
 */
class TrackRequest
{

    /**
     * @property string $locale
     */
    private $locale = null;

    /**
     * @property float $version
     */
    private $version = null;

    /**
     * The set of discriminators to be applied during a search.
     *
     * @property \TNTExpressConnect\Tracking\XSD\TrackRequest\SearchCriteriaAType
     * $searchCriteria
     */
    private $searchCriteria = null;

    /**
     * @property \TNTExpressConnect\Tracking\XSD\TrackRequest\LevelOfDetailAType
     * $levelOfDetail
     */
    private $levelOfDetail = null;

    /**
     * Gets as locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Sets a new locale
     *
     * @param string $locale
     * @return self
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * Gets as version
     *
     * @return float
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param float $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as searchCriteria
     *
     * The set of discriminators to be applied during a search.
     *
     * @return \TNTExpressConnect\Tracking\XSD\TrackRequest\SearchCriteriaAType
     */
    public function getSearchCriteria()
    {
        return $this->searchCriteria;
    }

    /**
     * Sets a new searchCriteria
     *
     * The set of discriminators to be applied during a search.
     *
     * @param \TNTExpressConnect\Tracking\XSD\TrackRequest\SearchCriteriaAType
     * $searchCriteria
     * @return self
     */
    public function setSearchCriteria(\TNTExpressConnect\Tracking\XSD\TrackRequest\SearchCriteriaAType $searchCriteria)
    {
        $this->searchCriteria = $searchCriteria;
        return $this;
    }

    /**
     * Gets as levelOfDetail
     *
     * @return \TNTExpressConnect\Tracking\XSD\TrackRequest\LevelOfDetailAType
     */
    public function getLevelOfDetail()
    {
        return $this->levelOfDetail;
    }

    /**
     * Sets a new levelOfDetail
     *
     * @param \TNTExpressConnect\Tracking\XSD\TrackRequest\LevelOfDetailAType
     * $levelOfDetail
     * @return self
     */
    public function setLevelOfDetail(\TNTExpressConnect\Tracking\XSD\TrackRequest\LevelOfDetailAType $levelOfDetail)
    {
        $this->levelOfDetail = $levelOfDetail;
        return $this;
    }


}

