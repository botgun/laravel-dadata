<?php

namespace BotGun\DaData\Methods\Suggestion;

use GuzzleHttp\Client;
use BotGun\DaData\Http\Router;
use BotGun\DaData\Methods\BaseMethod;

/**
 * Bank tips ("hints")
 *
 * You can define bank details in the demo form, view usage scenarios and service connection options on the page "Bank by name, BIC or INN"
 *
 * What it can do
 * - Searches for credit institutions:
 *      - by BIC;
 *      - SWIFT;
 *      - INN;
 *      - INN + KPP;
 *      - name;
 *      - address to the street;
 * - Filters by type: banks, NPOs and branches.
 * - Filters by region or city.
 * - Can search for both active banks and banks in liquidation.
 * - Takes into account where you are (geolocation to the city).
 *
 * @link https://dadata.ru/api/suggest/bank/
 * @property string $query
 */
class BankMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'Bank\\Suggestion';
    protected array  $parameters    = [
        'query' => 'string',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::suggestBank();

        parent::__construct($client);
    }
}
