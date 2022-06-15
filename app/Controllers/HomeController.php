<?php
namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;

class HomeController {

    private LoggerInterface $logger;

    public function __construct( LoggerInterface $logger ) {
        $this->logger = $logger;
    }

    public function index( RequestInterface $request, ResponseInterface $response ): ResponseInterface {
        $this->logger->info( HomeController::class . ": Chamou o método index" );
        $response->getBody()->write( 'Chamado do HomeController' );
        return $response;
    }
}