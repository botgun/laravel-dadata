<?php

namespace MoveMoveApp\DaData;

use MoveMoveApp\DaData\Http\Router;
use MoveMoveApp\DaData\Traits\HasOrganizationMethod;


class SuggestionsOrganizationApi extends Api
{
    use HasOrganizationMethod;

    public function __construct()
    {
        $this->baseUrl = Router::getSuggestionsUri();

        parent::__construct();
    }

}
