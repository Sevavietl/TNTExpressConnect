<?php
namespace TNTExpressConnect\Serializer;

use JMS\Serializer\SerializerInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Accessor\DefaultAccessorStrategy;
use JMS\Serializer\XmlSerializationVisitor;
use JMS\Serializer\XmlDeserializationVisitor;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\DeserializationContext;

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;

class Serializer implements SerializerInterface
{
    private $serializer;

    const SERVICES = [
        'Price',
        'Ship',
        'Tracking'
    ];
    
    public function __construct()
    {
        $this->createSerializerBuilder();

        $this->serializer = $this->serializerBuilder->build();
    }

    private $serializerBuilder;
    private function createSerializerBuilder()
    {
        $this->serializerBuilder = SerializerBuilder::create();

        $this->addMetadataDirs()
            ->configureHandlers()
            ->setVisitors();

        return $this;
    }

    private function addMetadataDirs()
    {
        foreach (self::SERVICES as $service) {
            $this->serializerBuilder->addMetadataDir(
                __DIR__ . "/../../metadata/$service",
                "TNTExpressConnect\\$service"
            );
        }

        return $this;
    }

    private function configureHandlers()
    {
        $this->serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) {
            $this->serializerBuilder->addDefaultHandlers();
            $handler->registerSubscribingHandler(new BaseTypesHandler());
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler());
            $handler->registerSubscribingHandler(new AnyTypeHandler());
        });

        return $this;
    }

    private function setVisitors()
    {
        $propertyNamingStrategy = new SerializedNameAnnotationStrategy(new CamelCaseNamingStrategy());
        $accessorStrategy = new DefaultAccessorStrategy();
        $serializationVisitor = new XmlSerializationVisitor($propertyNamingStrategy, $accessorStrategy);
        $serializationVisitor->setFormatOutput(false);
        $deserializationVisitor = new XmlDeserializationVisitor($propertyNamingStrategy);

        $this->serializerBuilder->setSerializationVisitor('xml', $serializationVisitor);
        $this->serializerBuilder->setDeserializationVisitor('xml', $deserializationVisitor);

        return $this;
    }

    public function serialize($data, $format = 'xml', SerializationContext $context = null)
    {
        return $this->serializer->serialize($data, $format, $context);
    }
    
    public function deserialize($data, $type, $format = 'xml', DeserializationContext $context = null)
    {
        return $this->serializer->deserialize($data, $type, $format, $context);
    }
}
