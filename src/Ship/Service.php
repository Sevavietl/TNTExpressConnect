<?php
namespace TNTExpressConnect\Ship;

use TNTExpressConnect\AbstractService;
use TNTExpressConnect\Ship\XSD\Document;

class Service extends AbstractService
{
    const URL = 'https://express.tnt.com/expressconnect/shipping/ship';
    
    public function send($xml)
    {
        $response = $this->client->request('POST', static::URL, [
            'headers' => [
                'Content-Type' => 'text/xml; charset=UTF8',
            ],
            'body' => $this->serializer->serialize($xml)
        ]);
        
        return $this->serializer->deserialize(
            (string) $response->getBody(),
            Document::class
        );
    }
}
