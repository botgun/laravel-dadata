<?php

namespace BotGun\DaData\Objects\Organization\By;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string|null    $unp
 * @property string|null    $registration_date
 * @property string|null    $removal_date
 * @property string|null    $actuality_date
 * @property string|null    $status
 * @property string|null    $type
 * @property string|null    $full_name_ru
 * @property string|null    $full_name_by
 * @property string|null    $short_name_ru
 * @property string|null    $short_name_by
 * @property string|null    $trade_name_ru
 * @property string|null    $trade_name_by
 * @property string|null    $fio_ru
 * @property string|null    $fio_by
 * @property string|null    $address
 * @property string|null    $oked
 * @property string|null    $oked_name
 */
class Organization extends BaseObject
{
    protected array $attributes = [
        'unp'                   => 'string|null',
        'registration_date'     => 'string|null',
        'removal_date'          => 'string|null',
        'actuality_date'        => 'string|null',
        'status'                => 'string|null',
        'type'                  => 'string|null',
        'full_name_ru'          => 'string|null',
        'full_name_by'          => 'string|null',
        'short_name_ru'         => 'string|null',
        'short_name_by'         => 'string|null',
        'trade_name_ru'         => 'string|null',
        'trade_name_by'         => 'string|null',
        'fio_ru'                => 'string|null',
        'fio_by'                => 'string|null',
        'address'               => 'string|null',
        'oked'                  => 'string|null',
        'oked_name'             => 'string|null',
    ];
}
