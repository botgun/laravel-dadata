<?php

namespace BotGun\DaData\Objects\Organization\Ru;

use BotGun\DaData\Objects\BaseObject;

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
