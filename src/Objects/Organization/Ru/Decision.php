<?php

namespace BotGun\DaData\Objects\Organization\Ru;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string|null $court_name
 * @property string|null $number
 * @property string|null $date
 */
class Decision extends BaseObject
{
    protected array $attributes = [
        'court_name'    => 'string|null',
        'number'        => 'string|null',
        'date'          => 'string|null',
    ];
}
