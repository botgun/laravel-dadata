<?php

namespace MoveMoveApp\DaData\Objects\Organization\Ru;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string|null $court_name
 * @property string|null $number
 * @property string|null $date
 */
class Decision extends BaseObject
{
    protected array $attributes = [
        'court_name'    => 'string|null',
        'number'        => 'string|null',
        'date'          => 'string|null',
    ];
}
