<?php

namespace MoveMoveApp\DaData\Methods\Organization;

use GuzzleHttp\Client;
use MoveMoveApp\DaData\Http\Router;
use MoveMoveApp\DaData\Methods\BaseMethod;

/**
 * Searches for companies and individual entrepreneurs:
 *  - by Tax Identification Number (TIN), Primary State Registration Number (PSRN), and Tax Registration Reason Code (TRRC);
 *  - by name (full and abbreviated);
 *  - by full name (for individual entrepreneurs);
 *  - by company executive's full name;
 *  - by address up to the street level.
 *
 * @link https://dadata.ru/api/suggest/party/
 */
class SuggestOrganizationMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'RuOrganization';
    protected array  $parameters    = [
        'query'             => 'string',
        'count'             => 'integer',
        'type'              => 'string',
        'status'            => 'array',
        'okved'             => 'string',
        'locations'         => 'array',
        'locations_boost'   => 'array',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::suggestOrganization();

        parent::__construct($client);
    }
}
