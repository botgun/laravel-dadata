<?php

namespace BotGun\DaData\Objects\Passport;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string|null    $code
 * @property string|null    $name
 * @property string|null    $region_code
 * @property string|null    $type
 */
class Fms extends BaseObject
{
    protected array $attributes = [
        'code'          => 'string|null',
        'name'          => 'string|null',
        'region_code'   => 'string|null',
        'type'          => 'string|null',
    ];
}
