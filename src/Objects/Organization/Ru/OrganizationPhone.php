<?php

namespace BotGun\DaData\Objects\Organization\Ru;

use BotGun\DaData\Objects\BaseObject;
use BotGun\DaData\Objects\Phone\Phone;

/**
 * @property string|null $value
 * @property string|null $unrestricted_value
 * @property Phone       $data
 */
class OrganizationPhone extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string|null',
        'unrestricted_value'    => 'string|null',
        'data'                  => 'Phone\\Phone'
    ];
}
