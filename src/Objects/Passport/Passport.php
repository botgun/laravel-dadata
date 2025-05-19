<?php

namespace MoveMoveApp\DaData\Objects\Passport;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string|null    $source
 * @property string|null    $series
 * @property string|null    $number
 * @property string|null    $qc
 */
class Passport extends BaseObject
{
    protected array $attributes = [
        'source'    => 'string|null',
        'series'    => 'string|null',
        'number'    => 'string|null',
        'qc'        => 'string|null',
    ];
}
