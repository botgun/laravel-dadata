<?php

namespace BotGun\DaData\Objects\Organization\Ru;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string|null $name
 * @property string|null $post
 * @property string|null $disqualified
 */
class Management extends BaseObject
{
    protected array $attributes = [
        'name'          => 'string|null',
        'post'          => 'string|null',
        'disqualified'  => 'string|null',
    ];
}
