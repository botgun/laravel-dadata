<?php

namespace BotGun\DaData\Objects\Document;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string|null $type
 * @property string|null $series
 * @property string|null $number
 * @property string|null $issue_date
 * @property string|null $issue_authority
 */
class Sif extends BaseObject
{
    protected array $attributes = [
        'type'              => 'string|null',
        'series'            => 'string|null',
        'number'            => 'string|null',
        'issue_date'        => 'string|null',
        'issue_authority'   => 'string|null',
    ];
}
