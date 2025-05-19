<?php

namespace MoveMoveApp\DaData\Objects\Email;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property Suggestions[] $suggestions
 */
class Suggestion extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Email\\Suggestions[]',
    ];
}
