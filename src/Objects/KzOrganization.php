<?php

namespace BotGun\DaData\Objects;

use BotGun\DaData\Objects\Organization\Kz\Suggest;

/**
 * @property Suggest[] $suggestions
 */
class KzOrganization extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Organization\\Kz\\Suggest[]',
    ];
}
