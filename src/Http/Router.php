<?php

namespace BotGun\DaData\Http;

class Router
{
    /**
     * Get DaData Suggestion API URL
     *
     * @return string
     */
    public static function getSuggestionsUrl(): string
    {
        return config('dadata.options.suggestions.url') ? config('dadata.options.suggestions.url') : 'https://suggestions.dadata.ru';
    }

    /**
     * Get DaData Suggestion API Version
     *
     * @return string
     */
    public static function getSuggestionsVersion(): string
    {
        return config('dadata.options.suggestions.version') ? config('dadata.options.suggestions.version') : '4_1';
    }

    /**
     * Get Suggestion URI to base resource
     *
     * @return string
     */
    public static function getSuggestionsUri(): string
    {
        $baseResource = config('dadata.options.suggestions.base_resource') ? config('dadata.options.suggestions.base_resource') : 'suggestions/api';

        return sprintf('%s/%s/%s/', self::getSuggestionsUrl(), $baseResource, self::getSuggestionsVersion());
    }

    /**
     * Get DaData Cleaner API URL
     *
     * @return string
     */
    public static function getCleanerUrl(): string
    {
        return config('dadata.options.cleaner.url') ? config('dadata.options.cleaner.url') : 'https://cleaner.dadata.ru';
    }

    /**
     * Get DaData Cleaner API Version
     *
     * @return string
     */
    public static function getCleanerVersion(): string
    {
        return config('dadata.options.cleaner.version') ? config('dadata.options.cleaner.version') : 'v1';
    }

    /**
     * Get Cleaner URI to base resource
     *
     * @return string
     */
    public static function getCleanerUri(): string
    {
        $baseResource = config('dadata.options.cleaner.base_resource') ? config('dadata.options.cleaner.base_resource') : 'api';

        return sprintf('%s/%s/%s/', self::getCleanerUrl(), $baseResource, self::getCleanerVersion());
    }

    /**
     * @return string
     */
    public static function findOrganizationById(): string
    {
        return 'rs/findById/party';
    }

    /**
     * @return string
     */
    public static function findBelarusianOrganization(): string
    {
        return 'rs/suggest/party_by';
    }

    /**
     * @return string
     */
    public static function findKazakhstanOrganization(): string
    {
        return 'rs/suggest/party_kz';
    }

    /**
     * @return string
     */
    public static function findOrganizationByEmail(): string
    {
        return 'rs/findByEmail/company';
    }

    /**
     * @return string
     */
    public static function affiliatedOrganization(): string
    {
        return 'rs/findAffiliated/party';
    }

    /**
     * @return string
     */
    public static function suggestOrganization(): string
    {
        return 'rs/suggest/party';
    }

    /**
     * @return string
     */
    public static function suggestAddress(): string
    {
        return 'rs/suggest/address';
    }

    /**
     * @return string
     */
    public static function suggestCountry(): string
    {
        return 'rs/suggest/country';
    }

    /**
     * @return string
     */
    public static function suggestPostalUnit(): string
    {
        return 'rs/suggest/postal_unit';
    }

    /**
     * @return string
     */
    public static function suggestName(): string
    {
        return 'rs/suggest/fio';
    }

    /**
     * @return string
     */
    public static function suggestPassport(): string
    {
        return 'rs/suggest/fms_unit';
    }

    /**
     * @return string
     */
    public static function suggestEmail(): string
    {
        return 'rs/suggest/email';
    }

    /**
     * @return string
     */
    public static function suggestBank(): string
    {
        return 'rs/suggest/bank';
    }

    /**
     * @return string
     */
    public static function suggestCarBrand(): string
    {
        return 'rs/suggest/car_brand';
    }

    /**
     * @return string
     */
    public static function cleanAddress(): string
    {
        return 'clean/address';
    }

    /**
     * @return string
     */
    public static function cleanName(): string
    {
        return 'clean/name';
    }

    /**
     * @return string
     */
    public static function cleanPhone(): string
    {
        return 'clean/phone';
    }

    /**
     * @return string
     */
    public static function cleanPassport(): string
    {
        return 'clean/passport';
    }

    /**
     * @return string
     */
    public static function cleanEmail(): string
    {
        return 'clean/email';
    }

    /**
     * @return string
     */
    public static function cleanVehicle(): string
    {
        return 'clean/vehicle';
    }

    /**
     * @return string
     */
    public static function geoLocateAddress(): string
    {
        return 'rs/geolocate/address';
    }

    /**
     * @return string
     */
    public static function findByIdAddress(): string
    {
        return 'rs/findById/address';
    }

}
