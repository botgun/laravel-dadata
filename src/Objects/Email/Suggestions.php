<?php

namespace BotGun\DaData\Objects\Email;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string $value
 * @property string $unrestricted_value
 * @property Email $data
 */
class Suggestions extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string',
        'unrestricted_value'    => 'string',
        'data'                  => 'Email\\Email',
    ];
}
