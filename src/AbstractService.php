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

    public function getUsername()
    {
        return $this->credentials->getUsername();
    }

    public function getPassword()
    {
        return $this->credentials->getPassword();
    }

    public function getAccount()
    {
        return $this->credentials->getAccount();
    }

    abstract public function send($xml);
}
