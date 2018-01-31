<?php

namespace TNTExpressConnect\Price\XSD;

/**
 * Class representing InsuranceType
 *
 *
 * XSD Type: insurance
 */
class InsuranceType
{

    /**
     * The value of the insurance required to cover the goodsValue specified in the
     * request. This
     *  is limited to a maximum of 110% of the goodsValue
     *
     * @property float $insuranceValue
     */
    private $insuranceValue = null;

    /**
     * The value of the goods in the currency specified in the request
     *
     * @property float $goodsValue
     */
    private $goodsValue = null;

    /**
     * Gets as insuranceValue
     *
     * The value of the insurance required to cover the goodsValue specified in the
     * request. This
     *  is limited to a maximum of 110% of the goodsValue
     *
     * @return float
     */
    public function getInsuranceValue()
    {
        return $this->insuranceValue;
    }

    /**
     * Sets a new insuranceValue
     *
     * The value of the insurance required to cover the goodsValue specified in the
     * request. This
     *  is limited to a maximum of 110% of the goodsValue
     *
     * @param float $insuranceValue
     * @return self
     */
    public function setInsuranceValue($insuranceValue)
    {
        $this->insuranceValue = $insuranceValue;
        return $this;
    }

    /**
     * Gets as goodsValue
     *
     * The value of the goods in the currency specified in the request
     *
     * @return float
     */
    public function getGoodsValue()
    {
        return $this->goodsValue;
    }

    /**
     * Sets a new goodsValue
     *
     * The value of the goods in the currency specified in the request
     *
     * @param float $goodsValue
     * @return self
     */
    public function setGoodsValue($goodsValue)
    {
        $this->goodsValue = $goodsValue;
        return $this;
    }


}

