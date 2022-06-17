<?php
namespace App\Controllers;

use App\Services\ServidorService;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;

class ServidorController {

    private LoggerInterface $logger;
    private ServidorService $servidorService;

    public function __construct( LoggerInterface $logger, ServidorService $servidorService ) {
        $this->logger          = $logger;
        $this->servidorService = $servidorService;
    }

    public function index( RequestInterface $request, ResponseInterface $response ): ResponseInterface {
        $results = $this->servidorService->findAll();
        $response->getBody()->write( json_encode( $results ) );
        return $response;
    }
}