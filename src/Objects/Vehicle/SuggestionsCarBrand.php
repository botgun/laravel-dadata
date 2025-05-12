<?php

namespace BotGun\DaData\Objects\Vehicle;

use BotGun\DaData\Objects\BaseObject;
use BotGun\DaData\Objects\Name\Name;
use BotGun\DaData\Objects\Passport\Fms;

/**
 * @property string $value
 * @property string $unrestricted_value
 * @property CarBrand $data
 */
class SuggestionsCarBrand extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string',
        'unrestricted_value'    => 'string',
        'data'                  => 'Vehicle\\CarBrand',
    ];
}
