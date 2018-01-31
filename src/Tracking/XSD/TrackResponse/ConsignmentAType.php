<?php

namespace TNTExpressConnect\Tracking\XSD\TrackResponse;

/**
 * Class representing ConsignmentAType
 */
class ConsignmentAType
{

    /**
     * @property string $access
     */
    private $access = null;

    /**
     * @property string $consignmentNumber
     */
    private $consignmentNumber = null;

    /**
     * @property string $alternativeConsignmentNumber
     */
    private $alternativeConsignmentNumber = null;

    /**
     * The Depot Code where the consignment originated
     *
     * @property string $originDepot
     */
    private $originDepot = null;

    /**
     * The name of the Depot where the consignment originated
     *
     * @property string $originDepotName
     */
    private $originDepotName = null;

    /**
     * The customer supplied reference assigned to this consignment
     *
     * @property string $customerReference
     */
    private $customerReference = null;

    /**
     * @property \TNTExpressConnect\Tracking\XSD\DateType $collectionDate
     */
    private $collectionDate = null;

    /**
     * @property string $deliveryTown
     */
    private $deliveryTown = null;

    /**
     * @property \TNTExpressConnect\Tracking\XSD\DateType $deliveryDate
     */
    private $deliveryDate = null;

    /**
     * @property \TNTExpressConnect\Tracking\XSD\TimeType $deliveryTime
     */
    private $deliveryTime = null;

    /**
     * @property string $signatory
     */
    private $signatory = null;

    /**
     * Has an enumerated value set, EXC represents Exception, INT respresents In
     * Transit, DEL represents Delivered and CNF represents Consignment Not Found
     *
     * @property string $summaryCode
     */
    private $summaryCode = null;

    /**
     * @property \TNTExpressConnect\Tracking\XSD\CountryStructureType
     * $destinationCountry
     */
    private $destinationCountry = null;

    /**
     * @property \TNTExpressConnect\Tracking\XSD\CountryStructureType $originCountry
     */
    private $originCountry = null;

    /**
     * The account against which shipment of the Consignment will be charged
     *
     * @property \TNTExpressConnect\Tracking\XSD\AccountStructureType
     * $termsOfPaymentAccount
     */
    private $termsOfPaymentAccount = null;

    /**
     * @property \TNTExpressConnect\Tracking\XSD\AccountStructureType $senderAccount
     */
    private $senderAccount = null;

    /**
     * @property \TNTExpressConnect\Serializer\AnyType $pieceQuantity
     */
    private $pieceQuantity = null;

    /**
     * @property \TNTExpressConnect\Tracking\XSD\StatusStructureType[] $statusData
     */
    private $statusData = array(
        
    );

    /**
     * @property \TNTExpressConnect\Tracking\XSD\PackageSummaryStructureType
     * $packageSummary
     */
    private $packageSummary = null;

    /**
     * @property \TNTExpressConnect\Tracking\XSD\ShipmentSummaryStructureType
     * $shipmentSummary
     */
    private $shipmentSummary = null;

    /**
     * @property \TNTExpressConnect\Tracking\XSD\AddressStructureType[] $addresses
     */
    private $addresses = null;

    /**
     * @property string $pOD
     */
    private $pOD = null;

    /**
     * Gets as access
     *
     * @return string
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Sets a new access
     *
     * @param string $access
     * @return self
     */
    public function setAccess($access)
    {
        $this->access = $access;
        return $this;
    }

    /**
     * Gets as consignmentNumber
     *
     * @return string
     */
    public function getConsignmentNumber()
    {
        return $this->consignmentNumber;
    }

    /**
     * Sets a new consignmentNumber
     *
     * @param string $consignmentNumber
     * @return self
     */
    public function setConsignmentNumber($consignmentNumber)
    {
        $this->consignmentNumber = $consignmentNumber;
        return $this;
    }

    /**
     * Gets as alternativeConsignmentNumber
     *
     * @return string
     */
    public function getAlternativeConsignmentNumber()
    {
        return $this->alternativeConsignmentNumber;
    }

    /**
     * Sets a new alternativeConsignmentNumber
     *
     * @param string $alternativeConsignmentNumber
     * @return self
     */
    public function setAlternativeConsignmentNumber($alternativeConsignmentNumber)
    {
        $this->alternativeConsignmentNumber = $alternativeConsignmentNumber;
        return $this;
    }

    /**
     * Gets as originDepot
     *
     * The Depot Code where the consignment originated
     *
     * @return string
     */
    public function getOriginDepot()
    {
        return $this->originDepot;
    }

    /**
     * Sets a new originDepot
     *
     * The Depot Code where the consignment originated
     *
     * @param string $originDepot
     * @return self
     */
    public function setOriginDepot($originDepot)
    {
        $this->originDepot = $originDepot;
        return $this;
    }

    /**
     * Gets as originDepotName
     *
     * The name of the Depot where the consignment originated
     *
     * @return string
     */
    public function getOriginDepotName()
    {
        return $this->originDepotName;
    }

    /**
     * Sets a new originDepotName
     *
     * The name of the Depot where the consignment originated
     *
     * @param string $originDepotName
     * @return self
     */
    public function setOriginDepotName($originDepotName)
    {
        $this->originDepotName = $originDepotName;
        return $this;
    }

    /**
     * Gets as customerReference
     *
     * The customer supplied reference assigned to this consignment
     *
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * Sets a new customerReference
     *
     * The customer supplied reference assigned to this consignment
     *
     * @param string $customerReference
     * @return self
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;
        return $this;
    }

    /**
     * Gets as collectionDate
     *
     * @return \TNTExpressConnect\Tracking\XSD\DateType
     */
    public function getCollectionDate()
    {
        return $this->collectionDate;
    }

    /**
     * Sets a new collectionDate
     *
     * @param \TNTExpressConnect\Tracking\XSD\DateType $collectionDate
     * @return self
     */
    public function setCollectionDate(\TNTExpressConnect\Tracking\XSD\DateType $collectionDate)
    {
        $this->collectionDate = $collectionDate;
        return $this;
    }

    /**
     * Gets as deliveryTown
     *
     * @return string
     */
    public function getDeliveryTown()
    {
        return $this->deliveryTown;
    }

    /**
     * Sets a new deliveryTown
     *
     * @param string $deliveryTown
     * @return self
     */
    public function setDeliveryTown($deliveryTown)
    {
        $this->deliveryTown = $deliveryTown;
        return $this;
    }

    /**
     * Gets as deliveryDate
     *
     * @return \TNTExpressConnect\Tracking\XSD\DateType
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Sets a new deliveryDate
     *
     * @param \TNTExpressConnect\Tracking\XSD\DateType $deliveryDate
     * @return self
     */
    public function setDeliveryDate(\TNTExpressConnect\Tracking\XSD\DateType $deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    /**
     * Gets as deliveryTime
     *
     * @return \TNTExpressConnect\Tracking\XSD\TimeType
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * Sets a new deliveryTime
     *
     * @param \TNTExpressConnect\Tracking\XSD\TimeType $deliveryTime
     * @return self
     */
    public function setDeliveryTime(\TNTExpressConnect\Tracking\XSD\TimeType $deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;
        return $this;
    }

    /**
     * Gets as signatory
     *
     * @return string
     */
    public function getSignatory()
    {
        return $this->signatory;
    }

    /**
     * Sets a new signatory
     *
     * @param string $signatory
     * @return self
     */
    public function setSignatory($signatory)
    {
        $this->signatory = $signatory;
        return $this;
    }

    /**
     * Gets as summaryCode
     *
     * Has an enumerated value set, EXC represents Exception, INT respresents In
     * Transit, DEL represents Delivered and CNF represents Consignment Not Found
     *
     * @return string
     */
    public function getSummaryCode()
    {
        return $this->summaryCode;
    }

    /**
     * Sets a new summaryCode
     *
     * Has an enumerated value set, EXC represents Exception, INT respresents In
     * Transit, DEL represents Delivered and CNF represents Consignment Not Found
     *
     * @param string $summaryCode
     * @return self
     */
    public function setSummaryCode($summaryCode)
    {
        $this->summaryCode = $summaryCode;
        return $this;
    }

    /**
     * Gets as destinationCountry
     *
     * @return \TNTExpressConnect\Tracking\XSD\CountryStructureType
     */
    public function getDestinationCountry()
    {
        return $this->destinationCountry;
    }

    /**
     * Sets a new destinationCountry
     *
     * @param \TNTExpressConnect\Tracking\XSD\CountryStructureType $destinationCountry
     * @return self
     */
    public function setDestinationCountry(\TNTExpressConnect\Tracking\XSD\CountryStructureType $destinationCountry)
    {
        $this->destinationCountry = $destinationCountry;
        return $this;
    }

    /**
     * Gets as originCountry
     *
     * @return \TNTExpressConnect\Tracking\XSD\CountryStructureType
     */
    public function getOriginCountry()
    {
        return $this->originCountry;
    }

    /**
     * Sets a new originCountry
     *
     * @param \TNTExpressConnect\Tracking\XSD\CountryStructureType $originCountry
     * @return self
     */
    public function setOriginCountry(\TNTExpressConnect\Tracking\XSD\CountryStructureType $originCountry)
    {
        $this->originCountry = $originCountry;
        return $this;
    }

    /**
     * Gets as termsOfPaymentAccount
     *
     * The account against which shipment of the Consignment will be charged
     *
     * @return \TNTExpressConnect\Tracking\XSD\AccountStructureType
     */
    public function getTermsOfPaymentAccount()
    {
        return $this->termsOfPaymentAccount;
    }

    /**
     * Sets a new termsOfPaymentAccount
     *
     * The account against which shipment of the Consignment will be charged
     *
     * @param \TNTExpressConnect\Tracking\XSD\AccountStructureType
     * $termsOfPaymentAccount
     * @return self
     */
    public function setTermsOfPaymentAccount(\TNTExpressConnect\Tracking\XSD\AccountStructureType $termsOfPaymentAccount)
    {
        $this->termsOfPaymentAccount = $termsOfPaymentAccount;
        return $this;
    }

    /**
     * Gets as senderAccount
     *
     * @return \TNTExpressConnect\Tracking\XSD\AccountStructureType
     */
    public function getSenderAccount()
    {
        return $this->senderAccount;
    }

    /**
     * Sets a new senderAccount
     *
     * @param \TNTExpressConnect\Tracking\XSD\AccountStructureType $senderAccount
     * @return self
     */
    public function setSenderAccount(\TNTExpressConnect\Tracking\XSD\AccountStructureType $senderAccount)
    {
        $this->senderAccount = $senderAccount;
        return $this;
    }

    /**
     * Gets as pieceQuantity
     *
     * @return \TNTExpressConnect\Serializer\AnyType
     */
    public function getPieceQuantity()
    {
        return $this->pieceQuantity;
    }

    /**
     * Sets a new pieceQuantity
     *
     * @param \TNTExpressConnect\Serializer\AnyType $pieceQuantity
     * @return self
     */
    public function setPieceQuantity(\TNTExpressConnect\Serializer\AnyType $pieceQuantity)
    {
        $this->pieceQuantity = $pieceQuantity;
        return $this;
    }

    /**
     * Adds as statusData
     *
     * @return self
     * @param \TNTExpressConnect\Tracking\XSD\StatusStructureType $statusData
     */
    public function addToStatusData(\TNTExpressConnect\Tracking\XSD\StatusStructureType $statusData)
    {
        $this->statusData[] = $statusData;
        return $this;
    }

    /**
     * isset statusData
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStatusData($index)
    {
        return isset($this->statusData[$index]);
    }

    /**
     * unset statusData
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStatusData($index)
    {
        unset($this->statusData[$index]);
    }

    /**
     * Gets as statusData
     *
     * @return \TNTExpressConnect\Tracking\XSD\StatusStructureType[]
     */
    public function getStatusData()
    {
        return $this->statusData;
    }

    /**
     * Sets a new statusData
     *
     * @param \TNTExpressConnect\Tracking\XSD\StatusStructureType[] $statusData
     * @return self
     */
    public function setStatusData(array $statusData)
    {
        $this->statusData = $statusData;
        return $this;
    }

    /**
     * Gets as packageSummary
     *
     * @return \TNTExpressConnect\Tracking\XSD\PackageSummaryStructureType
     */
    public function getPackageSummary()
    {
        return $this->packageSummary;
    }

    /**
     * Sets a new packageSummary
     *
     * @param \TNTExpressConnect\Tracking\XSD\PackageSummaryStructureType
     * $packageSummary
     * @return self
     */
    public function setPackageSummary(\TNTExpressConnect\Tracking\XSD\PackageSummaryStructureType $packageSummary)
    {
        $this->packageSummary = $packageSummary;
        return $this;
    }

    /**
     * Gets as shipmentSummary
     *
     * @return \TNTExpressConnect\Tracking\XSD\ShipmentSummaryStructureType
     */
    public function getShipmentSummary()
    {
        return $this->shipmentSummary;
    }

    /**
     * Sets a new shipmentSummary
     *
     * @param \TNTExpressConnect\Tracking\XSD\ShipmentSummaryStructureType
     * $shipmentSummary
     * @return self
     */
    public function setShipmentSummary(\TNTExpressConnect\Tracking\XSD\ShipmentSummaryStructureType $shipmentSummary)
    {
        $this->shipmentSummary = $shipmentSummary;
        return $this;
    }

    /**
     * Adds as address
     *
     * @return self
     * @param \TNTExpressConnect\Tracking\XSD\AddressStructureType $address
     */
    public function addToAddresses(\TNTExpressConnect\Tracking\XSD\AddressStructureType $address)
    {
        $this->addresses[] = $address;
        return $this;
    }

    /**
     * isset addresses
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddresses($index)
    {
        return isset($this->addresses[$index]);
    }

    /**
     * unset addresses
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddresses($index)
    {
        unset($this->addresses[$index]);
    }

    /**
     * Gets as addresses
     *
     * @return \TNTExpressConnect\Tracking\XSD\AddressStructureType[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Sets a new addresses
     *
     * @param \TNTExpressConnect\Tracking\XSD\AddressStructureType[] $addresses
     * @return self
     */
    public function setAddresses(array $addresses)
    {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * Gets as pOD
     *
     * @return string
     */
    public function getPOD()
    {
        return $this->pOD;
    }

    /**
     * Sets a new pOD
     *
     * @param string $pOD
     * @return self
     */
    public function setPOD($pOD)
    {
        $this->pOD = $pOD;
        return $this;
    }


}

