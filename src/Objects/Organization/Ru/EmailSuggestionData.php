<?php

namespace BotGun\DaData\Objects\Organization\Ru;

use BotGun\DaData\Objects\BaseObject;
use BotGun\DaData\Objects\Email\Email;

/**
 * @property Email $email
 * @property Company $company
 */
class EmailSuggestionData extends BaseObject
{
    protected array $attributes = [
        'email'     => 'Email\\Email',
        'company'   => 'Organization\\Ru\\Company',
    ];
}
