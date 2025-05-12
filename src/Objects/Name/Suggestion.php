<?php

namespace BotGun\DaData\Objects\Name;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property SuggestionsName[] $suggestions
 */
class Suggestions extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Name\\SuggestionsName[]',
    ];
}
