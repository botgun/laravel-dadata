<?php

namespace MoveMoveApp\DaData\Objects\Passport;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property Suggestions[] $suggestions
 */
class Suggestion extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Passport\\Suggestions[]',
    ];
}
