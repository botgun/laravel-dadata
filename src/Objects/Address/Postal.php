<?php

namespace BotGun\DaData\Objects\Address;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string|null        $postal_code
 * @property string|null        $is_closed
 * @property string|null        $type_code
 * @property string|null        $address_str
 * @property string|null        $address_kladr_id
 * @property string|null        $address_qc
 * @property float|null         $geo_lat
 * @property float|null         $geo_lon
 * @property string|null        $schedule_mon
 * @property string|null        $schedule_tue
 * @property string|null        $schedule_wed
 * @property string|null        $schedule_thu
 * @property string|null        $schedule_fri
 * @property string|null        $schedule_sat
 * @property string|null        $schedule_sun
 */
class Postal extends BaseObject
{
    protected array $attributes = [
        'postal_code'               => 'string|null',
        'is_closed'                 => 'bool',
        'type_code'                 => 'string|null',
        'address_str'               => 'string|null',
        'address_kladr_id'          => 'string|null',
        'address_qc'                => 'string|null',
        'geo_lat'                   => 'float|null',
        'geo_lon'                   => 'float|null',
        'schedule_mon'              => 'string|null',
        'schedule_tue'              => 'string|null',
        'schedule_wed'              => 'string|null',
        'schedule_thu'              => 'string|null',
        'schedule_fri'              => 'string|null',
        'schedule_sat'              => 'string|null',
        'schedule_sun'              => 'string|null',
    ];
}
