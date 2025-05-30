<?php

namespace MoveMoveApp\DaData\Objects\Bank;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string|null $payment
 * @property string|null $full
 * @property string|null $short
 */
class Name extends BaseObject
{
    protected array $attributes = [
        'payment'   => 'string|null',
        'full'      => 'string|null',
        'short'     => 'string|null',
    ];
}
