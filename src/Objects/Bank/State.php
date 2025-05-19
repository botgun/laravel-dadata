<?php

namespace MoveMoveApp\DaData\Objects\Bank;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string|null $status
 * @property string|null $code
 * @property string|null $actuality_date
 * @property string|null $registration_date
 * @property string|null $liquidation_date
 */
class State extends BaseObject
{
    protected array $attributes = [
        'status'            => 'string|null',
        'code'              => 'string|null',
        'actuality_date'    => 'string|null',
        'registration_date' => 'string|null',
        'liquidation_date'  => 'string|null',
    ];
}
