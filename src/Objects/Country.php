<?php

namespace MoveMoveApp\DaData\Objects;

use MoveMoveApp\DaData\Objects\Address\Suggest;

/**
 * @property Suggest[] $suggestions
 */
class Country extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Address\\CountrySuggest[]',
    ];
}
