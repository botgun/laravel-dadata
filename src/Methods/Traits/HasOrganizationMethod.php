<?php

namespace BotGun\DaData\Methods\Traits;

use Illuminate\Support\Str;
use BotGun\DaData\Exceptions\DaDataMethodExceptions;

trait HasOrganizationMethod
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

        if (class_exists($class = "BotGun\\DaData\\Methods\\Organization\\{$method}Method")) {
            return $class;
        }

        throw DaDataMethodExceptions::methodNotFound($method);
    }
}
