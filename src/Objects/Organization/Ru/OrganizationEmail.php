<?php

namespace BotGun\DaData\Objects\Organization\Ru;

use BotGun\DaData\Objects\BaseObject;
use BotGun\DaData\Objects\Email\Email;

/**
 * @property string|null $value
 * @property string|null $unrestricted_value
 * @property Email       $data
 */
class OrganizationEmail extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string|null',
        'unrestricted_value'    => 'string|null',
        'data'                  => 'Email\\Email'
    ];
}
