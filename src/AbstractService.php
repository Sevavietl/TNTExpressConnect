<?php
namespace TNTExpressConnect;

use TNTExpressConnect\Serializer\Serializer;
use GuzzleHttp\Client;

abstract class AbstractService
{
    protected $serializer;
    protected $client;

    protected $username;
    protected $password;
    protected $account;

    public function __construct($username, $password, $account = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->account = $account;

        $this->serializer = new Serializer;
        $this->client = new Client;
    }

    abstract public function send($xml);
}
