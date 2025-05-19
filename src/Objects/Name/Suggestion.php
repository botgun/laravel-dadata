<?php

namespace MoveMoveApp\DaData\Objects\Name;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property Suggestions[] $suggestions
 */
class Suggestion extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Name\\Suggestions[]',
    ];
}
