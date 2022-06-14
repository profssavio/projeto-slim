<?php

use Middlewares\Whoops;
use Slim\App;

return function ( App $app ) {
    $app->addRoutingMiddleware();
    $app->add( new Whoops() );
    $app->addErrorMiddleware( true, true, true );
};