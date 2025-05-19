<?php

namespace MoveMoveApp\DaData\Objects;

use MoveMoveApp\DaData\Objects\Organization\By\Suggest;

/**
 * @property Suggest[] $suggestions
 */
class ByOrganization extends BaseObject
{
    protected array $attributes = [
        'suggestions' => 'Organization\\By\\Suggest[]',
    ];
}
