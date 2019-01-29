<?php

class Musica {

    private $nome;
    private $vezesTocada;

    public function __construct($nome) {
        $this->nome = $nome;
        $this->vezesTocada = 0;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getVezesTocada() {
        return $this->vezesTocada;
    }
    
    public function tocou() {
        $this->vezesTocada++;
    }

}