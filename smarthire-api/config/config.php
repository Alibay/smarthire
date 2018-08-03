<?php

return [
    'http' => [
        'cors' => [
            'origin' => '*',
            'headers' => 'X-Requested-With, Content-Type, Accept, Origin, Authorization',
            'method' => 'GET, POST, PUT, DELETE, PATCH, OPTIONS',
        ]
    ],
    
    'db' => [
        'doctrine' => [
            'connection' => [
                'driver'   => 'pdo_pgsql',
                'host'     => getenv('DB_HOST'),
                'port'     => getenv('DB_PORT'),
                'dbname'   => getenv('DB_NAME'),
                'user'     => getenv('DB_USER'),
                'password' => getenv('DB_PASS')
            ],
            'options' => [

            ],
        ]
    ],
];