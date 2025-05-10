<?php

namespace BotGun\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static name(string[] $array)
 * @method static address(string[] $array)
 * @method static phone(string[] $array)
 * @method static passport(string[] $array)
 * @method static email(string[] $array)
 */
class DaDataCleaner extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'dadata_cleaner';
    }
}
