<?php

namespace TNTExpressConnect\Price\XSD;

/**
 * Class representing ProductType
 *
 *
 * XSD Type: product
 */
class ProductType
{

    /**
     * The identifier for the requested product/service e.g. 15N.
     *
     * @property string $id
     */
    private $id = null;

    /**
     * The identifier for the requested product/service division. This is an optional
     * element and
     *  if not specified will default to an appropriate division based on the origin
     * and destination country
     *  selected
     *
     * @property string $division
     */
    private $division = null;

    /**
     * A short description of the product e.g. Express
     *
     * @property string $productDesc
     */
    private $productDesc = null;

    /**
     * Type of service for product chosen. Values are "D" for a document or "N" for
     * non-documents.
     *  This is a mandatory element.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * A container element for TNT product option codes.
     *
     * @property \TNTExpressConnect\Price\XSD\OptionType[] $options
     */
    private $options = null;

    /**
     * Gets as id
     *
     * The identifier for the requested product/service e.g. 15N.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * The identifier for the requested product/service e.g. 15N.
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as division
     *
     * The identifier for the requested product/service division. This is an optional
     * element and
     *  if not specified will default to an appropriate division based on the origin
     * and destination country
     *  selected
     *
     * @return string
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Sets a new division
     *
     * The identifier for the requested product/service division. This is an optional
     * element and
     *  if not specified will default to an appropriate division based on the origin
     * and destination country
     *  selected
     *
     * @param string $division
     * @return self
     */
    public function setDivision($division)
    {
        $this->division = $division;
        return $this;
    }

    /**
     * Gets as productDesc
     *
     * A short description of the product e.g. Express
     *
     * @return string
     */
    public function getProductDesc()
    {
        return $this->productDesc;
    }

    /**
     * Sets a new productDesc
     *
     * A short description of the product e.g. Express
     *
     * @param string $productDesc
     * @return self
     */
    public function setProductDesc($productDesc)
    {
        $this->productDesc = $productDesc;
        return $this;
    }

    /**
     * Gets as type
     *
     * Type of service for product chosen. Values are "D" for a document or "N" for
     * non-documents.
     *  This is a mandatory element.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Type of service for product chosen. Values are "D" for a document or "N" for
     * non-documents.
     *  This is a mandatory element.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as option
     *
     * A container element for TNT product option codes.
     *
     * @return self
     * @param \TNTExpressConnect\Price\XSD\OptionType $option
     */
    public function addToOptions(\TNTExpressConnect\Price\XSD\OptionType $option)
    {
        $this->options[] = $option;
        return $this;
    }

    /**
     * isset options
     *
     * A container element for TNT product option codes.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOptions($index)
    {
        return isset($this->options[$index]);
    }

    /**
     * unset options
     *
     * A container element for TNT product option codes.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOptions($index)
    {
        unset($this->options[$index]);
    }

    /**
     * Gets as options
     *
     * A container element for TNT product option codes.
     *
     * @return \TNTExpressConnect\Price\XSD\OptionType[]
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Sets a new options
     *
     * A container element for TNT product option codes.
     *
     * @param \TNTExpressConnect\Price\XSD\OptionType[] $options
     * @return self
     */
    public function setOptions(array $options)
    {
        $this->options = $options;
        return $this;
    }


}

