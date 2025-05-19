<?php

namespace MoveMoveApp\DaData\Methods\Suggestion;

use GuzzleHttp\Client;
use MoveMoveApp\DaData\Http\Router;
use MoveMoveApp\DaData\Methods\BaseMethod;

/**
 * Car brands
 *
 * Car brands directory in English and Russian.
 *
 * @link https://dadata.ru/api/suggest/car_brand/
 * @property string $query
 */
class CarBrandMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'Vehicle\\Suggestion';
    protected array  $parameters    = [
        'query' => 'string',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::suggestCarBrand();

        parent::__construct($client);
    }
}
