<?php

namespace BotGun\DaData\Objects\Address;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string       $value
 * @property string       $unrestricted_value
 * @property Postal[]     $data
 */
class CountrySuggest extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string',
        'unrestricted_value'    => 'string',
        'data'                  => 'Address\\Country',
    ];
}
