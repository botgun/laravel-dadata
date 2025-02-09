<?php

namespace BotGun\DaData;

use BotGun\DaData\Http\Router;
use BotGun\DaData\Methods\Traits\HasAddressMethod;


class SuggestionsAddressApi extends Api
{
    use HasAddressMethod;

    public function __construct()
    {
        $this->baseUrl = Router::getSuggestionsUri();

        parent::__construct();
    }

}
