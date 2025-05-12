<?php

namespace BotGun\DaData\Methods\Suggestion;

use GuzzleHttp\Client;
use BotGun\DaData\Http\Router;
use BotGun\DaData\Methods\BaseMethod;

/**
 * Bank by BIC, SWIFT, INN or registration number
 *
 * Finds a bank by any of the identifiers:
 * - BIC;
 * - SWIFT;
 * - INN;
 * - INN + KPP (for branches);
 * - registration number assigned by the Bank of Russia.
 *
 * Search only by exact match, for partial match use the suggest method.
 *
 * @link https://dadata.ru/api/find-bank/
 * @property string $query
 */
class BankByIdMethod extends BaseMethod
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
        $this->entryPoint = Router::findBankById();

        parent::__construct($client);
    }
}
