<?php

namespace BotGun\DaData\Objects\Passport;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string $value
 * @property string $unrestricted_value
 * @property Fms $data
 */
class SuggestionsPassport extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string',
        'unrestricted_value'    => 'string',
        'data'                  => 'Passport\\Fms',
    ];
}
