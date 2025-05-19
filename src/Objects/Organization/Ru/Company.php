<?php

namespace MoveMoveApp\DaData\Objects\Organization\Ru;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string|null $domain
 * @property string|null $name
 * @property string|null $inn
 * @property string|null $ogrn
 * @property string|null $okved
 * @property string|null $okved_name
 * @property string|null $employee_count
 * @property string|null $income
 * @property string|null $city
 * @property string|null $timezone
 */
class Company extends BaseObject
{
    protected array $attributes = [
        'domain'            => 'string|null',
        'name'              => 'string|null',
        'inn'               => 'string|null',
        'ogrn'              => 'string|null',
        'okved'             => 'string|null',
        'okved_name'        => 'string|null',
        'employee_count'    => 'string|null',
        'income'            => 'string|null',
        'city'              => 'string|null',
        'timezone'          => 'string|null',
    ];
}
