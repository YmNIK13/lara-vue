<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |

    | Option                   | Description                                                              | Default value |
    |--------------------------|--------------------------------------------------------------------------|---------------|
    | paths                    | You can enable CORS for 1 or multiple paths, eg. `['api/*'] `            | `array()`     |
    | allowed_methods          | Matches the request method.                                              | `array('*')`  |
    | allowed_origins          | Matches the request origin. Wildcards can be used, eg. `*.mydomain.com`  | `array('*')`  |
    | allowed_origins_patterns | Matches the request origin with `preg_match`.                            | `array()`     |
    | allowed_headers          | Sets the Access-Control-Allow-Headers response header.                   | `array('*')`  |
    | exposed_headers          | Sets the Access-Control-Expose-Headers response header.                  | `false`       |
    | max_age                  | Sets the Access-Control-Max-Age response header.                         | `0`           |
    | supports_credentials     | Sets the Access-Control-Allow-Credentials header.

    */

    'paths' => ['api/*'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
