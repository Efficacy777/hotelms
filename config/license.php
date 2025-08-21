<?php

return [
    'mode' => env('LICENSE_MODE', 'development'), // development | production
    'key' => env('LICENSE_KEY', 'demo-key'),
    'cache_ttl' => 3600,
    'endpoint' => env('LICENSE_ENDPOINT', null),
];