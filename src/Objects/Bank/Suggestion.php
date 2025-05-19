<?php

namespace MoveMoveApp\DaData\Objects\Bank;

use MoveMoveApp\DaData\Objects\BaseObject;
use MoveMoveApp\DaData\Objects\Name\Suggestions;

/**
 * @property Suggestions[] $suggestions
 */
class Suggestion extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Bank\\Suggestions[]',
    ];
}
