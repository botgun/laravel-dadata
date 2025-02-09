<?php

namespace BotGun\DaData\Objects\Organization\Ru;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string|null $ogrn
 * @property string|null $inn
 * @property string|null $name
 * @property Fio         $fio
 * @property string|null $post
 * @property string|null $hid
 * @property string|null $type
 * @property Invalidity  $invalidity
 */
class Manager extends BaseObject
{
    protected array $attributes = [
        'ogrn'          => 'string|null',
        'inn'           => 'string|null',
        'name'          => 'string|null',
        'fio'           => 'Organization\\Ru\\Fio',
        'post'          => 'string|null',
        'hid'           => 'string|null',
        'type'          => 'string|null',
        'invalidity'    => 'Organization\\Ru\\Invalidity',
    ];
}
