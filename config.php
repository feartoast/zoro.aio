<?php
return [
    'name' => 'ZORO',
    'key' => 'TestKey',
    'cache' => 1,
    'debug' => true,
    'data' => [
        'type' => 'mysql',
        'host' => 'localhost',
        'base' => 'zoro',
        'user' => 'zoro',
        'pass' => 'PKfd-dLh34df5xj5'
    ],
    'features' => [ 'users', 'languages', 'data', 'storage', 'portal', 'options' ],
    'modules' => [ 'email', 'maps', 'stripe' ],
    'users' => [
        [ 'login' => 'faizuddin', 'password' => 'passwordman' ],
        [ 'login' => 'maazabul', 'password' => 'passwordman' ],
        
    ]
];