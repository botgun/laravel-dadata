<?php

return [
    /*
    |--------------------------------------------------------------------------------
    | DaData API Key
    |--------------------------------------------------------------------------------
    |
    | To use the library for interacting with DaData resources and their methods,
    | you need to specify a token, which serves as the API key. This parameter must
    | be obtained from your personal account at https://dadata.ru/profile/.
    |
    */

    'key'     => env('DADATA_KEY', null),

    /*
    |--------------------------------------------------------------------------------
    | DaData Secret Key
    |--------------------------------------------------------------------------------
    |
    | To use the library for interacting with DaData resources and their methods,
    | you need to specify a secret key, which is an additional security measure
    | for API access. This parameter must be obtained from your personal account
    | at https://dadata.ru/profile/.
    |
    */

    'secret'    => env('DADATA_SECRET_KEY', null),

    /*
    |--------------------------------------------------------------------------------
    | DaData Timeout
    |--------------------------------------------------------------------------------
    |
    | The timeout parameter specifies the number of seconds after which a request
    | to DaData should be canceled if no response is received. Adjust this value
    | based on your application's needs to ensure timely responses.
    */

    'timeout'   => env('DADATA_TIMEOUT', 10),

];
