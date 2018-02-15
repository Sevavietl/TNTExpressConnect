<?php
namespace TNTExpressConnect\Tracking;

use TNTExpressConnect\AbstractService;

class Service extends AbstractService
{
    const URL = 'https://express.tnt.com/expressconnect/track.do';
    
    public function send($xml)
    {
        $response = $this->client->request('POST', static::URL, [
            'headers' => [
                'Content-Type' => 'text/xml; charset=UTF8',
            ],
            'auth' => [$this->getUsername(), $this->getPassword()],
            'body' => $this->serializer->serialize($xml)
        ]);
        
        return $this->serializer->deserialize(
            (string) $response->getBody(),
            'TNTExpressConnect\Tracking\XSD\TrackResponse'
        );
    }
}
