<?php

namespace MoveMoveApp\DaData;

use MoveMoveApp\DaData\Http\Router;
use MoveMoveApp\DaData\Traits\HasAddressMethod;


class SuggestionsAddressApi extends Api
{
    use HasAddressMethod;

    public function __construct()
    {
        $this->baseUrl = Router::getSuggestionsUri();

        parent::__construct();
    }

}
