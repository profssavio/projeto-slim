<?php

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

return [
    LoggerInterface::class => function () {
        $log = new Logger( 'app' );
        $log->pushHandler( new StreamHandler( __DIR__ . '/app.log', Level::Debug ) );
        return $log;
    },
];