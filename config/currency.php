<?php

return [
    'default' => 'USD',
    'supported' => ['USD', 'EUR', 'GBP'],
    'format' => [
        'USD' => ['symbol' => '$', 'precision' => 2],
        'EUR' => ['symbol' => '€', 'precision' => 2],
        'GBP' => ['symbol' => '£', 'precision' => 2],
    ],
];