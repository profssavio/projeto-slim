<?php
namespace App\Repositories;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Support\Collection;

Class ServidorRepository implements IServidorRepository {

    private Capsule $capsule;

    public function __construct( Capsule $capsule ) {
        $this->capsule = $capsule;
    }

    public function findAll(): Collection {
        return $this->capsule::table( 'tb_servidor' )->get();
    }

}