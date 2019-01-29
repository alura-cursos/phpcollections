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

    public function tocou() {
        $this->vezesTocada++;
    }

    public function paraArray() {
        return array($this->nome, $this->vezesTocada);
    }

}