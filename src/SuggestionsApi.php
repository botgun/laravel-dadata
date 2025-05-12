<?php

namespace BotGun\DaData;

use BotGun\DaData\Http\Router;
use BotGun\DaData\Traits\HasSuggestionMethod;


class SuggestionsApi extends Api
{
    use HasSuggestionMethod;

    public function __construct()
    {
        $this->baseUrl = Router::getSuggestionsUri();

        parent::__construct();
    }

}
