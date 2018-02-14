<?php
namespace TNTExpressConnect\Serializer;

use JMS\Serializer\SerializerInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;

class Serializer implements SerializerInterface
{
    private $serializer;

    const SERVICES = [
        'Price',
        'Tracking'
    ];
    
    public function __construct()
    {
        $serializerBuilder = SerializerBuilder::create();

        foreach (self::SERVICES as $service) {
            $serializerBuilder->addMetadataDir(__DIR__ . "/../../metadata/$service", "TNTExpressConnect\\$service");
        }
        
        $serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
            $serializerBuilder->addDefaultHandlers();
            $handler->registerSubscribingHandler(new BaseTypesHandler());
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler());
            $handler->registerSubscribingHandler(new AnyTypeHandler());
        });

        $this->serializer = $serializerBuilder->build();
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
