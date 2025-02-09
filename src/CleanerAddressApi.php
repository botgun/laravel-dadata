<?php

namespace BotGun\DaData;

use BotGun\DaData\Http\Router;
use BotGun\DaData\Methods\Traits\HasAddressCleanerMethod;


class CleanerAddressApi extends Api
{
    use HasAddressCleanerMethod;

    public function __construct()
    {
        $this->baseUrl = Router::getCleanerUri();

        parent::__construct();
    }

}
