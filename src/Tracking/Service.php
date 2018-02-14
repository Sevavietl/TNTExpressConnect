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
            'auth' => [$this->username, $this->password],
            'body' => $this->serializer->serialize($xml)
        ]);
        
        return $this->serializer->deserialize(
            $response->getBody()->getContents(),
            'TNTExpressConnect\Tracking\XSD\TrackResponse'
        );
    }
}
