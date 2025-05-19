<?php

namespace MoveMoveApp\DaData\Exceptions;

class DaDataMethodExceptions extends DaDataException
{
    /**
     * @param string $method
     *
     * @return DaDataMethodExceptions
     */
    public static function methodNotFound(string $method): DaDataMethodExceptions
    {
        return new DaDataMethodExceptions("Method \"{$method}\" not found");
    }
}
