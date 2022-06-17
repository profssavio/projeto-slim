<?php
namespace App\Services;

use App\Repositories\IServidorRepository;
use Illuminate\Support\Collection;

class ServidorService {

    private IServidorRepository $servidorRepository;

    public function __construct( IServidorRepository $servidorRepository ) {
        $this->servidorRepository = $servidorRepository;
    }

    public function findAll(): Collection {
        return $this->servidorRepository->findAll();
    }

}