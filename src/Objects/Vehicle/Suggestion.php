<?php

namespace MoveMoveApp\DaData\Objects\Vehicle;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property Suggestions[] $suggestions
 */
class Suggestion extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Vehicle\\Suggestions[]',
    ];
}
