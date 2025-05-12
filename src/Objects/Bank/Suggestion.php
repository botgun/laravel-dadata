<?php

namespace BotGun\DaData\Objects\Bank;

use BotGun\DaData\Objects\BaseObject;
use BotGun\DaData\Objects\Name\Suggestions;

/**
 * @property Suggestions[] $suggestions
 */
class Suggestion extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Bank\\Suggestions[]',
    ];
}
