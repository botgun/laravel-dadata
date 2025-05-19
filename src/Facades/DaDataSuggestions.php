<?php

namespace MoveMoveApp\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static name(string[] $array)
 * @method static passport(string[] $array)
 * @method static email(string[] $array)
 * @method static carBrand(string[] $array)
 * @method static bank(string[] $array)
 * @method static bankById(string[] $array)
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
