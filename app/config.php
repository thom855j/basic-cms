<?php

return [
    'app' => [
        'path' => APSPATH,
        'views' => APSPATH . '/views',
        'url' => 'http://localhost/dev/basic-cms',
        'permalink' => 'slug'
    ],
    'db' => [
        'host' => '127.0.0.1',
        'driver' => 'mysql',
        'dbname' => 'basic-cms',
        'username' => 'root',
        'password' => 'mysql',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ],
    'mail' => [
        'host' => 'smtp.mail.com'
    ]
];