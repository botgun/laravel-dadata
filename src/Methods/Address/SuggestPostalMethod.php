<?php

namespace MoveMoveApp\DaData\Methods\Address;

use GuzzleHttp\Client;
use MoveMoveApp\DaData\Http\Router;
use MoveMoveApp\DaData\Methods\BaseMethod;

/**
 * Russian Post Office Branches
 * For online retailers shipping orders via mail across Russia, it's crucial to provide customers with information on where and when they can pick up their parcels.
 * This is where the directory of postal offices comes into play—it includes precise addresses, coordinates, and operating hours of each branch, as well as
 * notifications if a branch is temporarily closed.
 *
 * @note: "Dadata" facilitates the search for the exact post office by postal index or finds the nearest one by coordinates, enhancing customer
 *        convenience and streamlining the pickup process.
 *
 * @link https://dadata.ru/api/suggest/postal_unit/
 * @property string $query
 */
class SuggestPostalMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'Postal';
    protected array  $parameters    = [
        'query' => 'string',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::suggestPostalUnit();

        parent::__construct($client);
    }
}
