<?php

namespace BotGun\DaData\Objects\Bank;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string|null $type
 * @property string|null $full
 * @property string|null $short
 */
class Opf extends BaseObject
{
    protected array $attributes = [
        'type'      => 'string|null',
        'full'      => 'string|null',
        'short'     => 'string|null',
    ];
}
