<?php

namespace BotGun\DaData\Objects;

use BotGun\DaData\Objects\Organization\Ru\Suggest;

/**
 * @property Suggest[] $suggestions
 */
class RuOrganization extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Organization\\Ru\\Suggest[]',
    ];
}
