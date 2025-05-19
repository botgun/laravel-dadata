<?php

namespace MoveMoveApp\DaData\Objects\Name;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string|null $source
 * @property string|null $result
 * @property string|null $result_genitive
 * @property string|null $result_dative
 * @property string|null $result_ablative
 * @property string|null $surname
 * @property string|null $name
 * @property string|null $patronymic
 * @property string|null $gender
 * @property string|null $qc
 */
class CleanName extends BaseObject
{
    protected array $attributes = [
        'source'            => 'string|null',
        'result'            => 'string|null',
        'result_genitive'   => 'string|null',
        'result_dative'     => 'string|null',
        'result_ablative'   => 'string|null',
        'surname'           => 'string|null',
        'name'              => 'string|null',
        'patronymic'        => 'string|null',
        'gender'            => 'string|null',
        'qc'                => 'integer|null',
    ];
}
