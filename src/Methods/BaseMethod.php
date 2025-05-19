<?php

namespace MoveMoveApp\DaData\Methods;

use MoveMoveApp\DaData\Exceptions\DaDataIntegrationException;
use MoveMoveApp\DaData\Helpers\Type;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;

abstract class BaseMethod
{
    protected Client $client;

    /**
     * @param Client $client
     */
    public function __construct(Client &$client)
    {
        $this->client = $client;
    }

    /**
     * @param array $arguments
     *
     * @return mixed
     * @throws DaDataIntegrationException
     * @throws GuzzleException
     */
    public function __invoke(mixed $arguments = []): mixed
    {
        if (is_array($arguments)) {
            $arguments = Type::flattenArray($arguments, $this->parameters);
        } else {
            $arguments = [(string) $arguments];
        }

        try {

            $result = $this->client->request($this->method, $this->entryPoint, ['json' => $arguments]);

            return Type::cast(json_decode($result->getBody()), $this->expect);

        } catch (ClientException $exception) {
            $errorResponse = $exception->getResponse();
            $error         = json_decode($errorResponse->getBody());

            if ($error->message) {
                throw DaDataIntegrationException::externalDaDataApiError($error->message, $errorResponse->getStatusCode());
            }

            throw DaDataIntegrationException::undefinedDaDataApiError($errorResponse->getStatusCode());
        }
    }
}
