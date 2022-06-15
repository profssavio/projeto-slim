<?php
namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class HomeController {

    public function index( RequestInterface $request, ResponseInterface $response ): ResponseInterface {
        $response->getBody()->write( 'Chamado do HomeController' );
        return $response;
    }
}