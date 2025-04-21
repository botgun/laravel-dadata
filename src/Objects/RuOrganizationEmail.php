<?php

namespace BotGun\DaData\Objects;

use BotGun\DaData\Objects\Organization\Ru\EmailSuggestions;

/**
 * @property EmailSuggestions $suggestions
 */
class RuOrganizationEmail extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Organization\\Ru\\EmailSuggestions[]',
    ];
}
