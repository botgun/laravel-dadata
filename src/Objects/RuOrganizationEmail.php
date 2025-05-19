<?php

namespace MoveMoveApp\DaData\Objects;

use MoveMoveApp\DaData\Objects\Organization\Ru\EmailSuggestions;

/**
 * @property EmailSuggestions $suggestions
 */
class RuOrganizationEmail extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Organization\\Ru\\EmailSuggestions[]',
    ];
}
