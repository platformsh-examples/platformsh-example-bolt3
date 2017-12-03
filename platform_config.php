<?php

require_once __DIR__ . '/vendor/autoload.php';

if (!empty($_ENV['PLATFORM_RELATIONSHIPS'])){
    echo 'Writing Platform.sh database config...';
    $relationships = json_decode(base64_decode($_ENV['PLATFORM_RELATIONSHIPS'], true));

    $config = [
        'database' => [
            'driver' => 'mysql',
            'databasename' => $relationships['database'][0]['path'],
            'username' => $relationships['database'][0]['username'],
            'password' => $relationships['database'][0]['password'],
            'host' => $relationships['database'][0]['host']
        ]
    ];

    file_put_contents('app/config/config_local.yml', \Symfony\Component\Yaml\Yaml::dump($config));
    echo "done!\n";
}
