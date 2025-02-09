<?php

namespace BotGun\DaData\Objects\Organization\Ru;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string $source
 * @property string $qc
 */
class GranularAddress extends BaseObject
{
    protected array $attributes = [
        'source'    => 'string|null',
        'qc'        => 'integer|null',
    ];
}
