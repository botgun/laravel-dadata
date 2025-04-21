<?php

namespace BotGun\DaData\Objects\Organization\Ru;

use BotGun\DaData\Objects\BaseObject;
use BotGun\DaData\Objects\Email\Email;

/**
 * @property Email $email
 * @property Company $company
 */
class EmailSuggestions extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string|null',
        'unrestricted_value'    => 'string|null',
        'data'                  => ''
    ];
}
