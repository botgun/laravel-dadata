<?php

namespace MoveMoveApp\DaData\Objects\Passport;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string $value
 * @property string $unrestricted_value
 * @property Fms $data
 */
class Suggestions extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string',
        'unrestricted_value'    => 'string',
        'data'                  => 'Passport\\Fms',
    ];
}
