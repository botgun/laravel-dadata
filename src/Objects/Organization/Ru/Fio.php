<?php

namespace BotGun\DaData\Objects\Organization\Ru;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string|null $surname
 * @property string|null $name
 * @property string|null $patronymic
 * @property string|null $gender
 * @property string|null $source
 * @property string|null $qc
 */
class Fio extends BaseObject
{
    protected array $attributes = [
        'surname'       => 'string|null',
        'name'          => 'string|null',
        'patronymic'    => 'string|null',
        'gender'        => 'string|null',
        'source'        => 'string|null',
        'qc'            => 'string|null',
    ];
}
