<?php
namespace TNTExpressConnect;

use GuzzleHttp\ClientInterface;
use JMS\Serializer\SerializerInterface;

abstract class AbstractService
{
    protected $credentials;
    protected $serializer;
    protected $client;

    public function __construct(
        Credentials $credentials,
        SerializerInterface $serializer,
        ClientInterface $client
    ) {
        $this->credentials = $credentials;
        $this->serializer = $serializer;
        $this->client = $client;
    }

    abstract public function send($xml);
}
