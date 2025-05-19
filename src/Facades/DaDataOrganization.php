<?php

namespace MoveMoveApp\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static findRussianOrganization(string[] $array)
 * @method static findBelarusianOrganization(string[] $array)
 * @method static findKazakhstanOrganization(string[] $array)
 * @method static suggestOrganization(string[] $array)
 * @method static affiliatedOrganization(string[] $array)
 * @method static findOrganizationByEmail(string[] $array)
 */
class DaDataOrganization extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'dadata_organization';
    }
}
