<?php

namespace MoveMoveApp\DaData\Objects\Name;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string|null $surname
 * @property string|null $name
 * @property string|null $patronymic
 * @property string $gender
 * @property string|null $source
 * @property string|null $qc
 */
class Name extends BaseObject
{
    protected array $attributes = [
        'surname'       => 'string|null',
        'name'          => 'string|null',
        'patronymic'    => 'string|null',
        'gender'        => 'string',
        'source'        => 'string|null',
        'qc'            => 'integer|null',
    ];
}
