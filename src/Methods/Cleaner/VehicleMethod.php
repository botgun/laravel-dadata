<?php

namespace MoveMoveApp\DaData\Methods\Cleaner;

use MoveMoveApp\DaData\Http\Router;
use MoveMoveApp\DaData\Methods\BaseMethod;
use GuzzleHttp\Client;

/**
 * Check Car
 *
 * Recognizes the make and model of a car from a string.
 *
 * @link https://dadata.ru/api/clean/vehicle/
 * @property string $query
 */
class VehicleMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'Vehicle\\Vehicle[]';
    protected array  $parameters    = [
        0 => 'array',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::cleanVehicle();

        parent::__construct($client);
    }
}
