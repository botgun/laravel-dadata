<?php

namespace BotGun\DaData\Objects\Organization\Ru;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string|null $ogrn
 * @property string|null $inn
 * @property string|null $name
 * @property string|null $fio
 * @property string|null $hid
 * @property string|null $type
 * @property Share       $share
 * @property Invalidity  $invalidity
 */
class Founder extends BaseObject
{
    protected array $attributes = [
        'ogrn'          => 'string|null',
        'inn'           => 'string|null',
        'name'          => 'string|null',
        'fio'           => 'string|null',
        'hid'           => 'string|null',
        'type'          => 'string|null',
        'share'         => 'Organization\\Ru\\Share',
        'invalidity'    => 'Organization\\Ru\\Invalidity',
    ];
}
