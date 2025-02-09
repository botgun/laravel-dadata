<?php

namespace BotGun\DaData\Objects\Organization\Ru;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string|null $full_with_opf
 * @property string|null $short_with_opf
 * @property string|null $latin
 * @property string|null $full
 * @property string|null $short
 */
class Name extends BaseObject
{
    protected array $attributes = [
        'full_with_opf'     => 'string|null',
        'short_with_opf'    => 'string|null',
        'latin'             => 'string|null',
        'full'              => 'string|null',
        'short'             => 'string|null',
    ];
}
