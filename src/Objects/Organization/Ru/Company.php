<?php

namespace BotGun\DaData\Objects\Organization\Ru;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string|null $tax_system
 */
class Company extends BaseObject
{
    protected array $attributes = [
        'tax_system'    => 'string|null',
        'year'          => 'string|null',
        'income'        => 'string|null',
        'revenue'       => 'string|null',
        'expense'       => 'string|null',
        'debt'          => 'string|null',
        'penalty'       => 'string|null',
    ];
}
