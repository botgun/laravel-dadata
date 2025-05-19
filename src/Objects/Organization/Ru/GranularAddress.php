<?php

namespace MoveMoveApp\DaData\Objects\Organization\Ru;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string $source
 * @property string $qc
 */
class GranularAddress extends BaseObject
{
    protected array $attributes = [
        'source'    => 'string|null',
        'qc'        => 'integer|null',
    ];
}
