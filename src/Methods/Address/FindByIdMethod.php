<?php

namespace BotGun\DaData\Methods\Address;

use GuzzleHttp\Client;
use BotGun\DaData\Http\Router;
use BotGun\DaData\Methods\BaseMethod;

/**
 * Find address by FIAS, GAR, KLADR code or cadastral number
 *
 * Searches for addresses using any part of the address, from region to apartment ("piter zelenkov 7a" → "194044,
 * Business Center 'Chagall', Zelenkov Lane, 7a lit Z, office 16"). It also searches by postal code ("194044" → "St.
 * Petersburg, Zelenkov Lane").
 *  Capabilities:
 *    - Global Coverage: Works for all countries worldwide. In Russia, it provides detailed addresses down to the
 *      apartment level; in Belarus, Kazakhstan, and Uzbekistan,
 *      it provides addresses down to the house level; for other countries, it provides addresses down to the city
 *      level. It searches and displays results in both. Russian ("Самара, пр-кт Металлургов") and English ("Russia,
 *      gorod Samara, prospekt Metallurgov").
 *    - Historical and Synonym Search: Finds current addresses using historical names (e.g., "Свердловск" →
 *      "Екатеринбург") and synonyms
 *      (e.g., "Питер" → "Санкт-Петербург").
 *    - Partial Matching: Searches using partial matches for the last word in the query ("москва болот" → "г Москва,
 *      Болотная наб"), but not for the initial words ("мос болот" will not find it).
 *    - Error Correction: Corrects typos (e.g., "самара авиционная") and queries typed in the wrong keyboard layout
 *      (e.g., "vjcrdf" → "москва").
 *    - Cadastral and FIAS Codes: Finds addresses using cadastral numbers ("77:02:0004008:4143") and FIAS codes
 *      ("f26b876b-6857-4951-b060-ec6559f04a9a").
 *    - Detailed Breakdown: Returns addresses in administrative and municipal divisions, breaking down the selected
 *      address into granular parts (from region to apartment).
 *    - Granular Suggest: Provides granular suggestions for specific parts of the address (regions, cities,
 *      streets, houses).
 *    - Land Parcels: Identifies land parcels ("казань красная участок 109в" → "420025, Респ Татарстан, г Казань,
 *      Советский р-н, ул Большая Красная (Малые Клыки), уч 109в").
 *    - Location Awareness: Takes into account your location (in conjunction with the method for determining the city
 *      by IP address).
 *  Limitations:
 *    - Automated Processing: Cannot automatically (without human intervention) process addresses from a database
 *      or file.
 *    - Transliteration: Does not transliterate addresses (e.g., "moskva suhonskaja 11" → "127642, г Москва, ул
 *      Сухонская, д 11").
 *
 * @note: FIAS codes for buildings and apartments may change over time. To ensure data integrity, we recommend saving
 * the full address as a plain string in addition to the FIAS code. This will help preserve the address even if the
 * official code changes.
 *
 *
 * @link https://dadata.ru/api/find-address/
 *
 * @property string $query
 * @property string $count
 * @property string $language
 * @property string $division
 * @property array  $locations
 * @property string $locations_geo
 * @property string $locations_boost
 * @property string $from_bound
 * @property string $to_bound
 */
class FindByIdMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'Address';
    protected array  $parameters    = [
        'query'             => 'string',
        'count'             => 'integer',
        'language'          => 'string',
        'division'          => 'string',
        'locations'         => 'array',
        'locations_geo'     => 'string',
        'locations_boost'   => 'string',
        'from_bound'        => 'string',
        'to_bound'          => 'string',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::suggestAddress();

        parent::__construct($client);
    }
}
