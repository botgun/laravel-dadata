<?php

namespace BotGun\DaData\Methods\Suggestion;

use GuzzleHttp\Client;
use BotGun\DaData\Http\Router;
use BotGun\DaData\Methods\BaseMethod;

/**
 * Passport issued by
 * Instantly fills in the organization that issued the passport, by department code.
 *
 * The most tedious field when entering a passport is "Issued by". Writing something like "Department of Internal
 * Affairs of the Medvedev District of the Republic of Mari El" is tedious. That's why we made hints for the
 * "Passport issued by..." field."
 *
 * @link https://dadata.ru/api/suggest/fms_unit/
 * @property string $query
 */
class PassportMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'Passport\\Suggestion';
    protected array  $parameters    = [
        'query' => 'string',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::suggestPassport();

        parent::__construct($client);
    }
}
