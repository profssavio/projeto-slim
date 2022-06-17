<?php
namespace App\Repositories;

use Illuminate\Support\Collection;

interface IServidorRepository {

    public function findAll(): Collection;
}