<?php

namespace BotGun\DaData\Objects\Organization\Ru;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string|null $ogrn
 * @property string|null $inn
 * @property string|null $name
 * @property Fio|null $fio
 * @property string|null $hid
 * @property string|null $type
 * @property string|null $start_date
 * @property Share|null $share
 * @property Invalidity|null $invalidity
 * @property Decision|null $decision
 */
class Founder extends BaseObject
{
    protected array $attributes = [
        'ogrn'          => 'string|null',
        'inn'           => 'string|null',
        'name'          => 'string|null',
        'fio'           => 'Organization\\Ru\\Fio',
        'hid'           => 'string|null',
        'type'          => 'string|null',
        'start_date'    => 'string|null',
        'share'         => 'Organization\\Ru\\Share',
        'invalidity'    => 'Organization\\Ru\\Invalidity',
        'decision'      => 'Organization\\Ru\\Decision',
    ];
}
