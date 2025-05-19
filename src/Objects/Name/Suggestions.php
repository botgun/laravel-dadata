<?php

namespace MoveMoveApp\DaData\Objects\Name;

use MoveMoveApp\DaData\Objects\BaseObject;

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
