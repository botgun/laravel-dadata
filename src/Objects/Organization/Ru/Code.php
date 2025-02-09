<?php

namespace BotGun\DaData\Objects\Organization\Ru;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string|null $numeric
 * @property string|null $alpha_3
 */
class Code extends BaseObject
{
    protected array $attributes = [
        'numeric'   => 'string|null',
        'alpha_3'   => 'string|null',
    ];
}
