<?php

namespace BotGun\DaData\Traits;

use BotGun\DaData\Exceptions\DaDataMethodExceptions;
use Illuminate\Support\Str;

trait HasPhoneCleanerMethod
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

        if (class_exists($class = "BotGun\\DaData\\Methods\\Phone\\{$method}Method")) {
            return $class;
        }

        throw DaDataMethodExceptions::methodNotFound($method);
    }
}
