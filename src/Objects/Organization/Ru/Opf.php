<?php

namespace MoveMoveApp\DaData\Objects\Organization\Ru;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string|null $code
 * @property string|null $full
 * @property string|null $short
 * @property string|null $type
 */
class Opf extends BaseObject
{
    protected array $attributes = [
        'code'  => 'string|null',
        'full'  => 'string|null',
        'short' => 'string|null',
        'type'  => 'string|null',
    ];
}
