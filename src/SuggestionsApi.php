<?php

namespace MoveMoveApp\DaData;

use MoveMoveApp\DaData\Http\Router;
use MoveMoveApp\DaData\Traits\HasSuggestionMethod;


class SuggestionsApi extends Api
{
    use HasSuggestionMethod;

    public function __construct()
    {
        $this->baseUrl = Router::getSuggestionsUri();

        parent::__construct();
    }

}
