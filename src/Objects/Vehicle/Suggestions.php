<?php

namespace BotGun\DaData\Objects\Vehicle;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property SuggestionsCarBrand[] $suggestions
 */
class Suggestions extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Vehicle\\SuggestionsCarBrand[]',
    ];
}
