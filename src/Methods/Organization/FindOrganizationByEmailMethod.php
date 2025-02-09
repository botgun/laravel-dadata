<?php

namespace BotGun\DaData\Methods\Organization;


use GuzzleHttp\Client;
use BotGun\DaData\Http\Router;
use BotGun\DaData\Methods\BaseMethod;

/**
 * Finds the company by email address
 *
 *
 * @link https://dadata.ru/api/find-company/by-email/
 *
 * @property string     $query      Query text
 */
class FindOrganizationByEmailMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'RuOrganizationEmail';
    protected array  $parameters    = [
        'query'         => 'string',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::findOrganizationByEmail();

        parent::__construct($client);
    }
}
