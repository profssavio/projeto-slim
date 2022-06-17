<?php

use App\Controllers\HomeController;
use App\Controllers\ServidorController;
use Slim\App;

return function ( App $app ) {

    $app->get( '/', [HomeController::class, 'index'] );

    $app->get( '/servidor', [ServidorController::class, 'index'] );

};