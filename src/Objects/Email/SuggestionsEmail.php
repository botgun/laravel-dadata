<?php

namespace BotGun\DaData\Objects\Email;

use BotGun\DaData\Objects\BaseObject;
use BotGun\DaData\Objects\Name\Name;
use BotGun\DaData\Objects\Passport\Fms;

/**
 * @property string $value
 * @property string $unrestricted_value
 * @property Email $data
 */
class SuggestionsEmail extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string',
        'unrestricted_value'    => 'string',
        'data'                  => 'Email\\Email',
    ];
}
