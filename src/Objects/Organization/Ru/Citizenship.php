<?php

namespace BotGun\DaData\Objects\Organization\Ru;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property Code $code
 * @property Name $name
 */
class Citizenship extends BaseObject
{
    protected array $attributes = [
        'code' => 'Organization\\Ru\\Code',
        'name' => 'Organization\\Ru\\Name',
    ];
}
