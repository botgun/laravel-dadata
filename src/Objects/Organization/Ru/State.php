<?php

namespace MoveMoveApp\DaData\Objects\Organization\Ru;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string|null $actuality_date
 * @property string|null $registration_date
 * @property string|null $liquidation_date
 * @property string|null $status
 * @property int|null    $code
 */
class State extends BaseObject
{
    protected array $attributes = [
        'actuality_date'    => 'string|null',
        'registration_date' => 'string|null',
        'liquidation_date'  => 'string|null',
        'status'            => 'string|null',
        'code'              => 'integer|null',
    ];
}
