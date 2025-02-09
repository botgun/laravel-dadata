<?php

namespace BotGun\DaData\Objects;

use BotGun\DaData\Objects\Organization\By\Suggest;

/**
 * @property Suggest[] $suggestions
 */
class ByOrganization extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Organization\\By\\Suggest[]',
    ];
}
