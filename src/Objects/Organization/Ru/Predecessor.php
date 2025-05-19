<?php

namespace MoveMoveApp\DaData\Objects\Organization\Ru;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string|null $ogrn
 * @property string|null $inn
 * @property string|null $name
 */
class Predecessor extends BaseObject
{
    protected array $attributes = [
        'ogrn' => 'string|null',
        'inn'  => 'string|null',
        'name' => 'string|null',
    ];
}
