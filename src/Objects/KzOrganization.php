<?php

namespace MoveMoveApp\DaData\Objects;

use MoveMoveApp\DaData\Objects\Organization\Kz\Suggest;

/**
 * @property Suggest[] $suggestions
 */
class KzOrganization extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Organization\\Kz\\Suggest[]',
    ];
}
