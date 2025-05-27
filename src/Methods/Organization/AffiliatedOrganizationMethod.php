<?php

namespace MoveMoveApp\DaData\Methods\Organization;

use GuzzleHttp\Client;
use MoveMoveApp\DaData\Http\Router;
use MoveMoveApp\DaData\Methods\BaseMethod;

/**
 * It searches using the INN of both individuals and legal entities
 *
 * Often, a founder or director is involved in multiple legal entities, sometimes even in dozens of different companies. This information is valuable
 * for assessing the reliability of a counterparty, as well as for more effective marketing and sales strategies. To facilitate the search for affiliated companies,
 * "Dadata" identifies organizations based on the tax identification numbers (INN) of founders and directors.
 *
 * @link https://dadata.ru/api/find-affiliated/
 *
 * @property string     $query      Query text
 * @property integer    $count      Count of result
 * @property array      $scope      FOUNDERS, MANAGERS
 */
class AffiliatedOrganizationMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'Organization\\Ru\\Organization';
    protected array  $parameters    = [
        'query'         => 'string',
        'count'         => 'integer',
        'scope'         => 'array',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::affiliatedOrganization();

        parent::__construct($client);
    }
}
