<?php

use App\Repositories\IServidorRepository;
use App\Repositories\ServidorRepository;
use Illuminate\Database\Capsule\Manager as Capsule;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

return [
    LoggerInterface::class     => function () {
        $log = new Logger( 'app' );
        $log->pushHandler( new StreamHandler( __DIR__ . '/app.log', Level::Debug ) );
        return $log;
    },

    Capsule::class             => function () {
        $capsule = new Capsule();
        $capsule->addConnection( [
            'driver'    => $_ENV['DB_DRIVER'],
            'host'      => $_ENV['DB_HOST'],
            'database'  => $_ENV['DB_DATABASE'],
            'username'  => $_ENV['DB_USERNAME'],
            'password'  => $_ENV['DB_PASSWORD'],
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ] );
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        return $capsule;
    },
    IServidorRepository::class => \DI\get( ServidorRepository::class ),
];
