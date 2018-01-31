<?php

namespace TNTExpressConnect\Price\XSD;

/**
 * Class representing OptionType
 *
 *
 * XSD Type: option
 */
class OptionType
{

    /**
     * The option must be a valid code from the TNT dataset e.g. PR
     *
     * @property string $optionCode
     */
    private $optionCode = null;

    /**
     * A short description of the option .e.g priority
     *
     * @property string $optionDesc
     */
    private $optionDesc = null;

    /**
     * Gets as optionCode
     *
     * The option must be a valid code from the TNT dataset e.g. PR
     *
     * @return string
     */
    public function getOptionCode()
    {
        return $this->optionCode;
    }

    /**
     * Sets a new optionCode
     *
     * The option must be a valid code from the TNT dataset e.g. PR
     *
     * @param string $optionCode
     * @return self
     */
    public function setOptionCode($optionCode)
    {
        $this->optionCode = $optionCode;
        return $this;
    }

    /**
     * Gets as optionDesc
     *
     * A short description of the option .e.g priority
     *
     * @return string
     */
    public function getOptionDesc()
    {
        return $this->optionDesc;
    }

    /**
     * Sets a new optionDesc
     *
     * A short description of the option .e.g priority
     *
     * @param string $optionDesc
     * @return self
     */
    public function setOptionDesc($optionDesc)
    {
        $this->optionDesc = $optionDesc;
        return $this;
    }


}

