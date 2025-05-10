<?php

namespace BotGun\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static suggest(string[] $array)
 * @method static geoLocate(string[] $array)
 * @method static suggestPostal(string[] $array)
 * @method static findById(string[] $array)
 * @method static suggestCountry(string[] $array)
 */
class DaDataAddress extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'dadata_address';
    }
}
