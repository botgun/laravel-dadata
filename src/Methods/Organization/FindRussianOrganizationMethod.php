<?php

namespace MoveMoveApp\DaData\Methods\Organization;


use GuzzleHttp\Client;
use MoveMoveApp\DaData\Http\Router;
use MoveMoveApp\DaData\Methods\BaseMethod;

/**
 * Finds a company or individual entrepreneur by Tax Identification Number (TIN) or Primary State Registration Number (PSRN).
 * Returns all available information about the company, unlike the organizationSuggestions method, which only returns basic fields.
 *
 * @link https://dadata.ru/api/find-party/
 */
class FindRussianOrganizationMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'Organization\\Ru\\Organization';
    protected array  $parameters    = [
        'query'         => 'string',
        'count'         => 'integer',
        'kpp'           => 'string',
        'branch_type'   => 'string',
        'type'          => 'string',
        'status'        => 'array',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::findOrganizationById();

        parent::__construct($client);
    }
}
