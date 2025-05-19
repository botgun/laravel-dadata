<?php

namespace MoveMoveApp\DaData\Objects\Organization\Ru;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string|null $numeric
 * @property string|null $alpha_3
 */
class Code extends BaseObject
{
    protected array $attributes = [
        'numeric'   => 'string|null',
        'alpha_3'   => 'string|null',
    ];
}
