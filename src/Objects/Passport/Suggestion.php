<?php

namespace BotGun\DaData\Objects\Passport;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property Suggestions[] $suggestions
 */
class Suggestion extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Passport\\Suggestions[]',
    ];
}
