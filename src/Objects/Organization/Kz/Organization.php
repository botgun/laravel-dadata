<?php

namespace BotGun\DaData\Objects\Organization\Kz;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string|null    $bin
 * @property string|null    $registration_date
 * @property string|null    $status
 * @property string|null    $type
 * @property string|null    $name_ru
 * @property string|null    $name_kz
 * @property string|null    $fio
 * @property string|null    $kato
 * @property string|null    $address_ru
 * @property string|null    $address_kz
 * @property string|null    $address_settlement_ru
 * @property string|null    $address_settlement_kz
 * @property string|null    $address_local
 * @property string|null    $oked
 * @property string|null    $oked_name_ru
 * @property string|null    $oked_name_kz
 * @property string|null    $krp
 * @property string|null    $krp_name_ru
 * @property string|null    $krp_name_kz
 * @property string|null    $kse
 * @property string|null    $kse_name_ru
 * @property string|null    $kse_name_kz
 * @property string|null    $kfs
 * @property string|null    $kfs_name_ru
 * @property string|null    $kfs_name_kz
 */
class Organization extends BaseObject
{
    protected array $attributes = [
        'bin'                   => 'string|null',
        'registration_date'     => 'string|null',
        'status'                => 'string|null',
        'type'                  => 'string|null',
        'name_ru'               => 'string|null',
        'name_kz'               => 'string|null',
        'fio'                   => 'string|null',
        'kato'                  => 'string|null',
        'address_ru'            => 'string|null',
        'address_kz'            => 'string|null',
        'address_settlement_ru' => 'string|null',
        'address_settlement_kz' => 'string|null',
        'address_local'         => 'string|null',
        'oked'                  => 'string|null',
        'oked_name_ru'          => 'string|null',
        'oked_name_kz'          => 'string|null',
        'krp'                   => 'string|null',
        'krp_name_ru'           => 'string|null',
        'krp_name_kz'           => 'string|null',
        'kse'                   => 'string|null',
        'kse_name_ru'           => 'string|null',
        'kse_name_kz'           => 'string|null',
        'kfs'                   => 'string|null',
        'kfs_name_ru'           => 'string|null',
        'kfs_name_kz'           => 'string|null',
    ];
}
