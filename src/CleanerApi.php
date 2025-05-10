<?php

namespace BotGun\DaData;

use BotGun\DaData\Http\Router;
use BotGun\DaData\Traits\HasCleanerMethod;


class CleanerApi extends Api
{
    use HasCleanerMethod;

    public function __construct()
    {
        $this->baseUrl = Router::getCleanerUri();

        parent::__construct();
    }

}
