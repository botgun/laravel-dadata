<?php

namespace BotGun\DaData\Objects\Vehicle;

use BotGun\DaData\Objects\BaseObject;
use BotGun\DaData\Objects\Name\SuggestionsName;

/**
 * @property SuggestionsCarBrand[] $suggestions
 */
class Suggestions extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Vehicle\\SuggestionsCarBrand[]',
    ];
}
