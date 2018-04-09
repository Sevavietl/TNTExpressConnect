<?php
namespace TNTExpressConnect\Ship;

use JMS\Serializer\Exception\XmlErrorException;
use TNTExpressConnect\AbstractService;
use TNTExpressConnect\Ship\XSD\Response\Document;
use TNTExpressConnect\Ship\XSD\Response\RuntimeError;
use TNTExpressConnect\Ship\RuntimeError as RuntimeErrorException;

class Service extends AbstractService
{
    const URL = 'https://express.tnt.com/expressconnect/shipping/ship';

    public function send($xml)
    {
        $response = $this->sendRequest($this->serializer->serialize($xml));

        $response =  preg_replace("/[^0-9]/", "", $response);

        return $response;
    }

    public function getResult(string $accessKey)
    {
        $response = $this->sendRequest('GET_RESULT:' . $accessKey);

        return $this->serializer->deserialize((string) $response, Document::class);
    }

    public function getConnote(string $accessKey)
    {
        $response = $this->sendRequest('GET_CONNOTE:' . $accessKey);

        return $this->serializer->deserialize((string) $response, \TNTExpressConnect\Ship\XSD\Response\Consig::class);
    }

    public function getLabel(string $accessKey)
    {
        $response = $this->sendRequest('GET_LABEL:' . $accessKey);

        return $response;
    }

    private function sendRequest($xmlIn): string
    {
        $response = (string) $this->client->request('POST', static::URL, [
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF8',
            ],
            'form_params' => [
                'xml_in' => $xmlIn
            ]
        ])->getBody();

        try {
            /** @var RuntimeError $runtimeError */
            if (
            $runtimeError = $this->serializer->deserialize($response, RuntimeError::class)
            ) {
                throw new RuntimeErrorException($runtimeError->getErrorReason());
            }
        } catch (XmlErrorException $e) {
        }

        return $response;
    }
}
