<?php

namespace BotGun\DaData\Objects\Vehicle;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $name_ru
 */
class CarBrand extends BaseObject
{
    protected array $attributes = [
        'id'        => 'string|null',
        'name'      => 'string|null',
        'name_ru'   => 'string|null',
    ];
}
