<?php

namespace MoveMoveApp\DaData\Objects;

use MoveMoveApp\DaData\Objects\Address\Suggest;

/**
 * @property Suggest[] $suggestions
 */
class Address extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Address\\Suggest[]',
    ];
}
