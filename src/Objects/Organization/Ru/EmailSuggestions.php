<?php

namespace MoveMoveApp\DaData\Objects\Organization\Ru;

use MoveMoveApp\DaData\Objects\BaseObject;

/**
 * @property string|null $value
 * @property string|null $unrestricted_value
 * @property EmailSuggestionData $data
 */
class EmailSuggestions extends BaseObject
{
    protected array $attributes = [
        'value'                 => 'string|null',
        'unrestricted_value'    => 'string|null',
        'data'                  => 'Organization\\Ru\\EmailSuggestionData'
    ];
}
