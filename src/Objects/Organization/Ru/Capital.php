<?php

namespace BotGun\DaData\Objects\Organization\Ru;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string           $type
 * @property string           $value
 */
class Capital extends BaseObject
{
    protected array $attributes = [
        'type'  => 'string',
        'value' => 'string',
    ];
}
