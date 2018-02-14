<?php
namespace TNTExpressConnect;

use GuzzleHttp\ClientInterface;
use JMS\Serializer\SerializerInterface;

class ServiceFactory
{
    private $serializer;
    private $client;

    public function __construct(
        SerializerInterface $serializer,
        ClientInterface $client
    ) {
        $this->serializer = $serializer;
        $this->client = $client;
    }

    public function create($serviceName, $username, $password, $account = null)
    {
        $klass = $this->resolveClass($serviceName);
        $credentials = new Credentials($username, $password, $account);

        return new $klass($credentials, $this->serializer, $this->client);
    }

    private function resolveClass($serviceName)
    {
        $klass = 'TNTExpressConnect\\' . ucfirst($serviceName) . '\\Service';

        if (!class_exists($klass)) {
            throw new \RuntimeException("There is no service with name $serviceName.");
        }

        return $klass;
    }
}
