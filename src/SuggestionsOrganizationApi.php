<?php

namespace BotGun\DaData;

use BotGun\DaData\Http\Router;
use BotGun\DaData\Methods\Traits\HasOrganizationMethod;


class SuggestionsOrganizationApi extends Api
{
    use HasOrganizationMethod;

    public function __construct()
    {
        $this->baseUrl = Router::getSuggestionsUri();

        parent::__construct();
    }

}
