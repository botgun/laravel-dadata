<?php

namespace MoveMoveApp\DaData\Objects\Address;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string|null $name
 * @property string|null $line
 * @property float|null  $distance
 */
class Metro extends BaseObject
{
    protected array $attributes = [
        'name'      => 'string|null',
        'line'      => 'string|null',
        'distance'  => 'float|null'
    ];
}
