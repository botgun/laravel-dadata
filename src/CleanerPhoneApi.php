<?php

namespace BotGun\DaData;

use BotGun\DaData\Http\Router;
use BotGun\DaData\Traits\HasPhoneCleanerMethod;


class CleanerPhoneApi extends Api
{
    use HasPhoneCleanerMethod;

    public function __construct()
    {
        $this->baseUrl = Router::getCleanerUri();

        parent::__construct();
    }

}
