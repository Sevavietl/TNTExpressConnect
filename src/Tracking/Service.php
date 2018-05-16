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
                'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF8',
            ],
            'auth' => [$this->getUsername(), $this->getPassword()],
            'form_params' => [
                'xml_in' => $this->serializer->serialize($xml)
            ]
        ]);
        
        return $this->serializer->deserialize(
            (string) $response->getBody(),
            'TNTExpressConnect\Tracking\XSD\TrackResponse'
        );
    }
}
