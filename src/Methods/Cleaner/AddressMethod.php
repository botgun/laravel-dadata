<?php

namespace BotGun\DaData\Methods\Cleaner;

use BotGun\DaData\Http\Router;
use BotGun\DaData\Methods\BaseMethod;
use GuzzleHttp\Client;

/**
 * Address Standardization
 *
 * Our address standardization service offers comprehensive and precise handling of address data, tailored specifically for locations within Russia.
 * Here's what our service includes:
 *  - Field Segmentation: Breaks down addresses into distinct components such as region, city, street, building, and apartment.
 *  - Postal Code Verification: Calculates the correct postal code using data from Russian Post to ensure accuracy in mail delivery.
 *  - Geolocation: Determines precise geographical coordinates for each address, facilitating location-based services and logistics planning.
 *  - Detailed Locality Insights: Provides information about the administrative district and borough of the city, nearest metro stations,
 *    and even details like the area and estimated cost of an apartment.+
 *  - Access to Essential Codes: Retrieves important administrative codes such as KLADR, FIAS (GAR), OKATO, OKTMO, and IFNS,
 *    which are crucial for various bureaucratic, legal, and logistical processes.
 *
 * @note: This service is designed to support the specific needs of users and businesses operating in Russia, ensuring compliance with local standards and regulations
 *
 * @link https://dadata.ru/api/clean/address/
 * @property string $query
 */
class AddressMethod extends BaseMethod
{
    protected string $method        = 'POST';
    protected string $entryPoint;
    protected string $expect        = 'Address\\Address[]';
    protected array  $parameters    = [
        0 => 'array',
    ];

    /**
     * @param Client $client
     *
     */
    public function __construct(Client &$client)
    {
        $this->entryPoint = Router::cleanAddress();

        parent::__construct($client);
    }
}
