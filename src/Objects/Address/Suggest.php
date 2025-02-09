<?php

namespace BotGun\DaData\Objects\Address;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string       $value
 * @property string       $unrestricted_value
 * @property Address $data
 */
class Suggest extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string',
        'unrestricted_value'    => 'string',
        'data'                  => 'Address\\Address',
    ];
}
