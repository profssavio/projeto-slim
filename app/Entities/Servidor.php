<?php

class Servidor {
    private $id;
    private $matricula;
    private $nome;

    public function getId() {
        return $this->id;
    }

    public function setId( $id ) {
        $this->id = $id;

        return $this;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula( $matricula ) {
        $this->matricula = $matricula;

        return $this;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome( $nome ) {
        $this->nome = $nome;

        return $this;
    }
}