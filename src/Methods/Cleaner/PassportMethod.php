<?php

namespace MoveMoveApp\DaData\Methods\Cleaner;

use MoveMoveApp\DaData\Http\Router;
use MoveMoveApp\DaData\Methods\BaseMethod;
use GuzzleHttp\Client;

/**
 * Check against the Ministry of Internal Affairs registry
 *
 * Checks the passport against the Ministry of Internal Affairs directory of invalid passports.
 *
 * - Checks the format of the series and number.
 * - Checks the passport against the directory of invalid passports of the Ministry of Internal Affairs.
 *
 * @link https://dadata.ru/api/clean/passport/
 * @property string $query
 */
class PassportMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'Passport\\Passport[]';
    protected array  $parameters    = [
        0 => 'array',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::cleanPassport();

        parent::__construct($client);
    }
}
