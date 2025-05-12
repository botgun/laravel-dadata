<?php

namespace BotGun\DaData\Objects\Name;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property Suggestions[] $suggestions
 */
class Suggestion extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Name\\Suggestions[]',
    ];
}
