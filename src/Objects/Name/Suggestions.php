<?php

namespace BotGun\DaData\Objects\Name;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string $value
 * @property string $unrestricted_value
 * @property Name $data
 */
class Suggestions extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string',
        'unrestricted_value'    => 'string',
        'data'                  => 'Name\\Name',
    ];
}
