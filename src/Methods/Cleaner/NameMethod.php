<?php

namespace BotGun\DaData\Methods\Cleaner;

use BotGun\DaData\Http\Router;
use BotGun\DaData\Methods\BaseMethod;
use GuzzleHttp\Client;

/**
 * CleanName Standardization
 *
 * Parsing a full name from a string ("standardization")
 * Splits a full name from a string into separate fields (last name, first name, patronymic). Determines gender and declines by case.
 *
 * - Corrects typos and transliterates.
 * - Indicates gender.
 * - Declines by case (who? to whom? by whom?).
 *
 * @link https://dadata.ru/api/clean/name/
 * @property string $query
 */
class NameMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'Name\\CleanName[]';
    protected array  $parameters    = [
        0 => 'array',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::cleanName();

        parent::__construct($client);
    }
}
