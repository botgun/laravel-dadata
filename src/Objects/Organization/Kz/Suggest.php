<?php

namespace MoveMoveApp\DaData\Objects\Organization\Kz;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string       $value
 * @property string       $unrestricted_value
 * @property Organization $data
 */
class Suggest extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string',
        'unrestricted_value'    => 'string',
        'data'                  => 'Organization\\Kz\\Organization',
    ];
}
