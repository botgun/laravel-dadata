<?php

namespace MoveMoveApp\DaData;

use MoveMoveApp\DaData\Exceptions\DaDataMethodExceptions;
use MoveMoveApp\DaData\Http\HttpClient;

class Api extends HttpClient
{
    /**
     * @param $method
     * @param $parameters
     *
     * @return mixed
     * @throws DaDataMethodExceptions
     */
    public function __call($method, $parameters)
    {
        if (! $Method = static::method($method)) {
            throw DaDataMethodExceptions::methodNotFound($method);
        }

        $method = new $Method($this->client);

        return $method(...$parameters);
    }
}
