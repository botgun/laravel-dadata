<?php

namespace BotGun\DaData\Objects\Email;

use BotGun\DaData\Objects\BaseObject;
use BotGun\DaData\Objects\Name\SuggestionsName;

/**
 * @property SuggestionsName[] $suggestions
 */
class Suggestions extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Email\\SuggestionsEmail[]',
    ];
}
