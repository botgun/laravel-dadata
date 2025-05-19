<?php

namespace MoveMoveApp\DaData\Exceptions;

class DaDataIntegrationException extends DaDataException
{
    /**
     * @param int $code
     *
     * @return DaDataIntegrationException
     */
    public static function undefinedDaDataApiError(int $code): DaDataIntegrationException
    {
        return new DaDataIntegrationException("Undefined DaData API error with {$code} code");
    }

    /**
     * @param string $message
     * @param int    $code
     *
     * @return DaDataIntegrationException
     */
    public static function externalDaDataApiError(string $message, int $code): DaDataIntegrationException
    {
        return new DaDataIntegrationException("DaData error: {$message}. Error code is {$code}");
    }
}
