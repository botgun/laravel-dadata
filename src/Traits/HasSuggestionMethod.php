<?php

namespace BotGun\DaData\Traits;

use BotGun\DaData\Exceptions\DaDataMethodExceptions;
use Illuminate\Support\Str;

trait HasSuggestionMethod
{
    /**
     * @param string $method
     *
     * @return string
     * @throws DaDataMethodExceptions
     */
    protected function method(string $method): string
    {
        $method = Str::studly($method);

        if (class_exists($class = "BotGun\\DaData\\Methods\\Suggestion\\{$method}Method")) {
            return $class;
        }

        throw DaDataMethodExceptions::methodNotFound($method);
    }
}
