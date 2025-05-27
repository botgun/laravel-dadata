<?php

namespace MoveMoveApp\DaData\Methods\Organization;


use GuzzleHttp\Client;
use MoveMoveApp\DaData\Http\Router;
use MoveMoveApp\DaData\Methods\BaseMethod;

/**
 * Directory of Organizations and Individual Entrepreneurs of Kazakhstan.
 *
 *
 * @link https://dadata.ru/api/suggest/party_kz/
 *
 * @property string     $query      Query text
 */
class FindKazakhstanOrganizationMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'KzOrganization';
    protected array  $parameters    = [
        'query'         => 'string',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::findKazakhstanOrganization();

        parent::__construct($client);
    }
}
