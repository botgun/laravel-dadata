<?php

namespace BotGun\DaData\Objects;

use BotGun\DaData\Objects\Address\Suggest;

/**
 * @property Suggest[] $suggestions
 */
class Postal extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Address\\PostalSuggest',
    ];
}
