<?php

namespace MoveMoveApp\DaData\Objects\Organization\Ru;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string|null   $series
 * @property string|null   $number
 * @property string|null   $issue_date
 * @property string|null   $issue_authority
 * @property string|null   $suspend_date
 * @property string|null   $suspend_authority
 * @property string|null   $valid_from
 * @property string|null   $valid_to
 * @property string[]|null $activities
 * @property string[]|null $addresses
 */
class License extends BaseObject
{
    protected array $attributes = [
        'series'                => 'string|null',
        'number'                => 'string|null',
        'issue_date'            => 'string|null',
        'issue_authority'       => 'string|null',
        'suspend_date'          => 'string|null',
        'suspend_authority'     => 'string|null',
        'valid_from'            => 'string|null',
        'valid_to'              => 'string|null',
        'activities'            => 'string[]|null',
        'addresses'             => 'string[]|null',
    ];
}
