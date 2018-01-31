<?php
namespace TNTExpressConnect\Tracking;

use TNTExpressConnect\AbstractService;

class Service extends AbstractService
{
    public function send($xml)
    {
        $response = $this->client->request('POST', self::URL, [
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
