<?php

namespace BotGun\DaData\Objects\Email;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property SuggestionsEmail[] $suggestions
 */
class Suggestions extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Email\\SuggestionsEmail[]',
    ];
}
