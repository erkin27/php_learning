<?php

return [
    'database' => [
        'name' => 'mytodo',
        'username' => 'erkin',
        'password' => 'Qwerty123',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];