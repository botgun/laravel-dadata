<?php

namespace MoveMoveApp\DaData\Objects\Organization\Ru;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string           $type
 * @property string           $value
 */
class Capital extends BaseObject
{
    protected array $attributes = [
        'type'  => 'string',
        'value' => 'string',
    ];
}
