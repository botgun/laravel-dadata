<?php

namespace MoveMoveApp\DaData\Methods\Suggestion;

use GuzzleHttp\Client;
use MoveMoveApp\DaData\Http\Router;
use MoveMoveApp\DaData\Methods\BaseMethod;

/**
 * Autocomplete as you type ("hints")
 *
 * Helps a person quickly enter their full name on a web form or in an application.
 *
 * What it can and can't do
 * - Suggests the full name in one line or separately the last name, first name, patronymic.
 * - Corrects the keyboard layout ("fynjy" → "Anton").
 * - Determines gender.
 *
 * It can't:
 * - Automatically (without human intervention) process the full name from a database or file.
 * - Transliterate (Juliia Somova → Yulia Somova).
 * - Decline by cases (who? to whom? by whom?).
 *
 * @NOTE: Suggestion are not suitable for automatic processing of full names. They offer options, but do not guarantee that they guessed correctly. Therefore, the final decision should always be made by a person.
 *
 * For automatic processing, transliteration and declension by cases, use the Standardization API
 *
 * @link https://dadata.ru/api/suggest/name/
 * @property string $query
 */
class NameMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'Name\\Suggestion';
    protected array  $parameters    = [
        'query' => 'string',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::suggestName();

        parent::__construct($client);
    }
}
