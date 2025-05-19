<?php

namespace MoveMoveApp\DaData\Objects\Vehicle;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string $value
 * @property string $unrestricted_value
 * @property CarBrand $data
 */
class Suggestions extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string',
        'unrestricted_value'    => 'string',
        'data'                  => 'Vehicle\\CarBrand',
    ];
}
