<?php

namespace BotGun\DaData\Methods\Suggestion;

use GuzzleHttp\Client;
use BotGun\DaData\Http\Router;
use BotGun\DaData\Methods\BaseMethod;

/**
 * Autocomplete as you type ("hints")
 *
 * Helps a person quickly enter an email address on a web form or in an application.
 *
 * What it can and can't do
 * - Suggests the local part (before the "at" sign).
 * - Suggests the domain part (after the "at" sign).
 * - Corrects typos (yadex.ru → yandex.ru).
 *
 * What it can't do:
 * - Automatically (without human intervention) check addresses from a database or file.
 * - Classify addresses as personal (@mail.ru, @yandex.ru), corporate (@myshop.ru) and "role" (info@, support@).
 *
 * Hints are not suitable for automatic email processing. They offer options, but do not guarantee that they have
 * guessed correctly. Therefore, a person should always make the final decision.
 *
 * @link https://dadata.ru/api/suggest/email/
 * @property string $query
 */
class EmailMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'Email\\Suggestions';
    protected array  $parameters    = [
        'query' => 'string',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::suggestEmail();

        parent::__construct($client);
    }
}
