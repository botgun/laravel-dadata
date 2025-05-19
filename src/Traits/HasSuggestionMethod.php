<?php

namespace MoveMoveApp\DaData\Traits;

use MoveMoveApp\DaData\Exceptions\DaDataMethodExceptions;
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

        if (class_exists($class = "MoveMoveApp\\DaData\\Methods\\Suggestion\\{$method}Method")) {
            return $class;
        }

        throw DaDataMethodExceptions::methodNotFound($method);
    }
}
