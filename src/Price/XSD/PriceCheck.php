<?php

namespace TNTExpressConnect\Price\XSD;

/**
 * Class representing PriceCheck
 */
class PriceCheck
{

    /**
     * It is recommended that the value is unique within the priceRequest to allow easy
     *  identification of results to requests.
     *
     * @property string $rateId
     */
    private $rateId = null;

    /**
     * This element provides the origin address details and must be supplied for each
     * Price
     *  request message.
     *
     * @property \TNTExpressConnect\Price\XSD\AddressType $sender
     */
    private $sender = null;

    /**
     * This container element provides the destination address details and must be
     * supplied for
     *  each Price
     *  request message.
     *
     * @property \TNTExpressConnect\Price\XSD\AddressType $delivery
     */
    private $delivery = null;

    /**
     * The format of a date time is yyyy-mmddThh:MM:ss
     *
     * @property \DateTime $collectionDateTime
     */
    private $collectionDateTime = null;

    /**
     * This is a container element for Information relating to the TNT product chosen
     * for this
     *  priceCheck.
     *
     * @property \TNTExpressConnect\Price\XSD\ProductType $product
     */
    private $product = null;

    /**
     * This is an optional element but must be supplied to obtain accurate price
     * estimates.
     *
     * @property \TNTExpressConnect\Price\XSD\AccountType $account
     */
    private $account = null;

    /**
     * This container element holds the insurance details needed to retrieve an
     * insurance quote
     *  as part of the price response. If an insurance option such as IN is specified
     * than these elements become
     *  mandatory.
     *
     * @property \TNTExpressConnect\Price\XSD\InsuranceType $insurance
     */
    private $insurance = null;

    /**
     * Whether the sender or receiver to paying for the shipment. Values are "S" for a
     * sender or
     *  "R" for receiver. Optional element, which default to S if not supplied.
     *
     * @property string $termsOfPayment
     */
    private $termsOfPayment = null;

    /**
     * The ISO 4217 Alpha-3 currency codes for the currency of the price request.
     *
     * @property string $currency
     */
    private $currency = null;

    /**
     * This is an optional element that determines if a full price breakdown is
     * returned or just
     *  the high level rate. The default value is false.
     *
     * @property boolean $priceBreakDown
     */
    private $priceBreakDown = null;

    /**
     * Container element to hold the summary consignment details for the pricing
     * request. This
     *  element is
     *  optional as long as the pieceLine are specified instead
     *
     * @property \TNTExpressConnect\Price\XSD\ConsignmentDetailsType
     * $consignmentDetails
     */
    private $consignmentDetails = null;

    /**
     * The pieceLine container element is used to describe the individual piece lines
     * which
     *  make up the
     *  consignment in greater detail. It is an optional element and can occur multiple
     * times. The
     *  details
     *  specified for the pieceLine must be compatible
     *  with those specified in the consignmentDetails. If
     *  no
     *  pieceLine are specified then
     *  a default one will be created.
     *
     * @property \TNTExpressConnect\Price\XSD\PieceLineType[] $pieceLine
     */
    private $pieceLine = array(
        
    );

    /**
     * Gets as rateId
     *
     * It is recommended that the value is unique within the priceRequest to allow easy
     *  identification of results to requests.
     *
     * @return string
     */
    public function getRateId()
    {
        return $this->rateId;
    }

    /**
     * Sets a new rateId
     *
     * It is recommended that the value is unique within the priceRequest to allow easy
     *  identification of results to requests.
     *
     * @param string $rateId
     * @return self
     */
    public function setRateId($rateId)
    {
        $this->rateId = $rateId;
        return $this;
    }

    /**
     * Gets as sender
     *
     * This element provides the origin address details and must be supplied for each
     * Price
     *  request message.
     *
     * @return \TNTExpressConnect\Price\XSD\AddressType
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Sets a new sender
     *
     * This element provides the origin address details and must be supplied for each
     * Price
     *  request message.
     *
     * @param \TNTExpressConnect\Price\XSD\AddressType $sender
     * @return self
     */
    public function setSender(\TNTExpressConnect\Price\XSD\AddressType $sender)
    {
        $this->sender = $sender;
        return $this;
    }

    /**
     * Gets as delivery
     *
     * This container element provides the destination address details and must be
     * supplied for
     *  each Price
     *  request message.
     *
     * @return \TNTExpressConnect\Price\XSD\AddressType
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Sets a new delivery
     *
     * This container element provides the destination address details and must be
     * supplied for
     *  each Price
     *  request message.
     *
     * @param \TNTExpressConnect\Price\XSD\AddressType $delivery
     * @return self
     */
    public function setDelivery(\TNTExpressConnect\Price\XSD\AddressType $delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Gets as collectionDateTime
     *
     * The format of a date time is yyyy-mmddThh:MM:ss
     *
     * @return \DateTime
     */
    public function getCollectionDateTime()
    {
        return $this->collectionDateTime;
    }

    /**
     * Sets a new collectionDateTime
     *
     * The format of a date time is yyyy-mmddThh:MM:ss
     *
     * @param \DateTime $collectionDateTime
     * @return self
     */
    public function setCollectionDateTime(\DateTime $collectionDateTime)
    {
        $this->collectionDateTime = $collectionDateTime;
        return $this;
    }

    /**
     * Gets as product
     *
     * This is a container element for Information relating to the TNT product chosen
     * for this
     *  priceCheck.
     *
     * @return \TNTExpressConnect\Price\XSD\ProductType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * This is a container element for Information relating to the TNT product chosen
     * for this
     *  priceCheck.
     *
     * @param \TNTExpressConnect\Price\XSD\ProductType $product
     * @return self
     */
    public function setProduct(\TNTExpressConnect\Price\XSD\ProductType $product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Gets as account
     *
     * This is an optional element but must be supplied to obtain accurate price
     * estimates.
     *
     * @return \TNTExpressConnect\Price\XSD\AccountType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * This is an optional element but must be supplied to obtain accurate price
     * estimates.
     *
     * @param \TNTExpressConnect\Price\XSD\AccountType $account
     * @return self
     */
    public function setAccount(\TNTExpressConnect\Price\XSD\AccountType $account)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Gets as insurance
     *
     * This container element holds the insurance details needed to retrieve an
     * insurance quote
     *  as part of the price response. If an insurance option such as IN is specified
     * than these elements become
     *  mandatory.
     *
     * @return \TNTExpressConnect\Price\XSD\InsuranceType
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * Sets a new insurance
     *
     * This container element holds the insurance details needed to retrieve an
     * insurance quote
     *  as part of the price response. If an insurance option such as IN is specified
     * than these elements become
     *  mandatory.
     *
     * @param \TNTExpressConnect\Price\XSD\InsuranceType $insurance
     * @return self
     */
    public function setInsurance(\TNTExpressConnect\Price\XSD\InsuranceType $insurance)
    {
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * Gets as termsOfPayment
     *
     * Whether the sender or receiver to paying for the shipment. Values are "S" for a
     * sender or
     *  "R" for receiver. Optional element, which default to S if not supplied.
     *
     * @return string
     */
    public function getTermsOfPayment()
    {
        return $this->termsOfPayment;
    }

    /**
     * Sets a new termsOfPayment
     *
     * Whether the sender or receiver to paying for the shipment. Values are "S" for a
     * sender or
     *  "R" for receiver. Optional element, which default to S if not supplied.
     *
     * @param string $termsOfPayment
     * @return self
     */
    public function setTermsOfPayment($termsOfPayment)
    {
        $this->termsOfPayment = $termsOfPayment;
        return $this;
    }

    /**
     * Gets as currency
     *
     * The ISO 4217 Alpha-3 currency codes for the currency of the price request.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * The ISO 4217 Alpha-3 currency codes for the currency of the price request.
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as priceBreakDown
     *
     * This is an optional element that determines if a full price breakdown is
     * returned or just
     *  the high level rate. The default value is false.
     *
     * @return boolean
     */
    public function getPriceBreakDown()
    {
        return $this->priceBreakDown;
    }

    /**
     * Sets a new priceBreakDown
     *
     * This is an optional element that determines if a full price breakdown is
     * returned or just
     *  the high level rate. The default value is false.
     *
     * @param boolean $priceBreakDown
     * @return self
     */
    public function setPriceBreakDown($priceBreakDown)
    {
        $this->priceBreakDown = $priceBreakDown;
        return $this;
    }

    /**
     * Gets as consignmentDetails
     *
     * Container element to hold the summary consignment details for the pricing
     * request. This
     *  element is
     *  optional as long as the pieceLine are specified instead
     *
     * @return \TNTExpressConnect\Price\XSD\ConsignmentDetailsType
     */
    public function getConsignmentDetails()
    {
        return $this->consignmentDetails;
    }

    /**
     * Sets a new consignmentDetails
     *
     * Container element to hold the summary consignment details for the pricing
     * request. This
     *  element is
     *  optional as long as the pieceLine are specified instead
     *
     * @param \TNTExpressConnect\Price\XSD\ConsignmentDetailsType $consignmentDetails
     * @return self
     */
    public function setConsignmentDetails(\TNTExpressConnect\Price\XSD\ConsignmentDetailsType $consignmentDetails)
    {
        $this->consignmentDetails = $consignmentDetails;
        return $this;
    }

    /**
     * Adds as pieceLine
     *
     * The pieceLine container element is used to describe the individual piece lines
     * which
     *  make up the
     *  consignment in greater detail. It is an optional element and can occur multiple
     * times. The
     *  details
     *  specified for the pieceLine must be compatible
     *  with those specified in the consignmentDetails. If
     *  no
     *  pieceLine are specified then
     *  a default one will be created.
     *
     * @return self
     * @param \TNTExpressConnect\Price\XSD\PieceLineType $pieceLine
     */
    public function addToPieceLine(\TNTExpressConnect\Price\XSD\PieceLineType $pieceLine)
    {
        $this->pieceLine[] = $pieceLine;
        return $this;
    }

    /**
     * isset pieceLine
     *
     * The pieceLine container element is used to describe the individual piece lines
     * which
     *  make up the
     *  consignment in greater detail. It is an optional element and can occur multiple
     * times. The
     *  details
     *  specified for the pieceLine must be compatible
     *  with those specified in the consignmentDetails. If
     *  no
     *  pieceLine are specified then
     *  a default one will be created.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPieceLine($index)
    {
        return isset($this->pieceLine[$index]);
    }

    /**
     * unset pieceLine
     *
     * The pieceLine container element is used to describe the individual piece lines
     * which
     *  make up the
     *  consignment in greater detail. It is an optional element and can occur multiple
     * times. The
     *  details
     *  specified for the pieceLine must be compatible
     *  with those specified in the consignmentDetails. If
     *  no
     *  pieceLine are specified then
     *  a default one will be created.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPieceLine($index)
    {
        unset($this->pieceLine[$index]);
    }

    /**
     * Gets as pieceLine
     *
     * The pieceLine container element is used to describe the individual piece lines
     * which
     *  make up the
     *  consignment in greater detail. It is an optional element and can occur multiple
     * times. The
     *  details
     *  specified for the pieceLine must be compatible
     *  with those specified in the consignmentDetails. If
     *  no
     *  pieceLine are specified then
     *  a default one will be created.
     *
     * @return \TNTExpressConnect\Price\XSD\PieceLineType[]
     */
    public function getPieceLine()
    {
        return $this->pieceLine;
    }

    /**
     * Sets a new pieceLine
     *
     * The pieceLine container element is used to describe the individual piece lines
     * which
     *  make up the
     *  consignment in greater detail. It is an optional element and can occur multiple
     * times. The
     *  details
     *  specified for the pieceLine must be compatible
     *  with those specified in the consignmentDetails. If
     *  no
     *  pieceLine are specified then
     *  a default one will be created.
     *
     * @param \TNTExpressConnect\Price\XSD\PieceLineType[] $pieceLine
     * @return self
     */
    public function setPieceLine(array $pieceLine)
    {
        $this->pieceLine = $pieceLine;
        return $this;
    }


}

