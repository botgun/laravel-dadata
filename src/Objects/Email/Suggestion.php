<?php

namespace BotGun\DaData\Objects\Email;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property Suggestions[] $suggestions
 */
class Suggestion extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Email\\Suggestions[]',
    ];
}
