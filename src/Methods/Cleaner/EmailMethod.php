<?php

namespace BotGun\DaData\Methods\Cleaner;

use BotGun\DaData\Http\Router;
use BotGun\DaData\Methods\BaseMethod;
use GuzzleHttp\Client;

/**
 * Check email
 *
 * Corrects typos and checks for disposable addresses. Classifies addresses into personal, corporate and "role".
 *
 * - Checks the address format.
 * - Corrects common typos.
 * - Checks if the address is a "disposable" one.
 * - Classifies addresses into personal (@mail.ru, @yandex.ru), corporate (@myshop.ru) and "role" (info@, support@).
 *
 * @link https://dadata.ru/api/
 * @property string $query
 */
class EmailMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'Email\\Email[]';
    protected array  $parameters    = [
        0 => 'array',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::cleanEmail();

        parent::__construct($client);
    }
}
