<?php
namespace App\Controllers;

use Illuminate\Database\Capsule\Manager as Capsule;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;

class HomeController {

    private LoggerInterface $logger;
    private Capsule $capsule;

    public function __construct( LoggerInterface $logger, Capsule $capsule ) {
        $this->logger  = $logger;
        $this->capsule = $capsule;
    }

    public function index( RequestInterface $request, ResponseInterface $response ): ResponseInterface {
        $this->logger->info( HomeController::class . ": Chamou o método index" );
        $results = $this->capsule::table( 'tb_servidor' )->get();
        $response->getBody()->write( json_encode( $results ) );
        return $response;
    }
}