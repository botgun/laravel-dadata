<?php

namespace MoveMoveApp\DaData\Objects\Organization\Ru;

use MoveMoveApp\DaData\Objects\BaseObject;
use MoveMoveApp\DaData\Objects\Email\Email;

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
