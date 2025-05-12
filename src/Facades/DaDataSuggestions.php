<?php

namespace BotGun\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static name(string[] $array)
 * @method static passport(string[] $array)
 * @method static email(string[] $array)
 */
class DaDataSuggestions extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'dadata_suggestions';
    }
}
