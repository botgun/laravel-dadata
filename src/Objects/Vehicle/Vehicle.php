<?php

namespace BotGun\DaData\Objects\Vehicle;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string|null $source
 * @property string|null $result
 * @property string|null $brand
 * @property string|null $model
 * @property string|null $qc
 */
class Vehicle extends BaseObject
{
    protected array $attributes = [
        'source'    => 'string|null',
        'result'    => 'string|null',
        'brand'     => 'string|null',
        'model'     => 'string|null',
        'qc'        => 'string|null',
    ];
}
