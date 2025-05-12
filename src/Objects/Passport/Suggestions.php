<?php

namespace BotGun\DaData\Objects\Passport;

use BotGun\DaData\Objects\BaseObject;
use BotGun\DaData\Objects\Name\SuggestionsName;

/**
 * @property SuggestionsName[] $suggestions
 */
class Suggestions extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Passport\\SuggestionsPassport[]',
    ];
}
