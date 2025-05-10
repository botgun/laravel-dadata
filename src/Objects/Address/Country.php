<?php

namespace BotGun\DaData\Objects\Address;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property int $code
 * @property string $alfa2
 * @property string $alfa3
 * @property string $name_short
 * @property string|null $name
 */
class Country extends BaseObject
{
    protected array $attributes = [
        'code'          => 'integer',
        'alfa2'         => 'string',
        'alfa3'         => 'string',
        'name_short'    => 'string',
        'name'          => 'string|null',
    ];
}
