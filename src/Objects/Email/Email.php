<?php

namespace BotGun\DaData\Objects\Email;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string|null $source
 * @property string|null $email
 * @property string|null $local
 * @property string|null $domain
 * @property string|null $type
 * @property string|null $qc
 */
class Email extends BaseObject
{
    protected array $attributes = [
        'source'    => 'string|null',
        'email'     => 'string|null',
        'local'     => 'string|null',
        'domain'    => 'string|null',
        'type'      => 'string|null',
        'qc'        => 'string|null',
    ];
}
