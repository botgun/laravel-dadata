<?php

namespace MoveMoveApp\DaData;

use MoveMoveApp\DaData\Http\Router;
use MoveMoveApp\DaData\Traits\HasCleanerMethod;


class CleanerApi extends Api
{
    use HasCleanerMethod;

    public function __construct()
    {
        $this->baseUrl = Router::getCleanerUri();

        parent::__construct();
    }

}
