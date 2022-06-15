<?php

use App\Controllers\HomeController;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;

return function ( App $app ) {

    $app->get( '/', [HomeController::class, 'index'] );

    $app->get( '/teste', function ( RequestInterface $request, ResponseInterface $response, $args ) {
        $response->getBody()->write( 'pagina de teste' );
        return $response;
    } );

};