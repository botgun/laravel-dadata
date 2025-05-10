<?php

namespace BotGun\DaData\Methods\Address;

use GuzzleHttp\Client;
use BotGun\DaData\Http\Router;
use BotGun\DaData\Methods\BaseMethod;

/**
 * Suggest Country
 *
 * Directory of countries of the world according to the ISO 3166 standard.
 *
 * @link https://dadata.ru/api/suggest/country/
 *
 * @property string $query
 */
class SuggestCountryMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'Country';
    protected array  $parameters    = [
        'query' => 'string',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::suggestCountry();

        parent::__construct($client);
    }
}
