<?php

class TocadorDeMusica {

    private $musicas;

    public function __construct() {
        $this->musicas = new SplDoublyLinkedList();
        $this->historico = new SplStack();
        $this->filaDeDownloads = new SplQueue();
        $this->maisTocadas = new MaisTocadas();
        $this->musicas->rewind();
    }    

    public function adicionarMusicas(SplFixedArray $musicas) {
        for($musicas->rewind() ; $musicas->valid() ; $musicas->next()) {
            $this->musicas->push($musicas->current());
        }

        $this->musicas->rewind();
    }

    public function tocarMusica() {

        if($this->musicas->count() === 0) {
            echo "Erro, nenhuma música no Tocador";
        } else {   
            echo "Tocando música: " . $this->musicas->current()->getNome() . "<br>";
            $this->historico->push($this->musicas->current()->getNome());
            $this->musicas->current()->tocou();
        }

    }

    public function tocarUltimaMusicaTocada() {
        echo "Tocando do histórico: " . $this->historico->pop()->getNome() . "<br>";
    }

    public function adicionarMusica(Musica $musica) {
        $this->musicas->push($musica);
    }

    public function avancarMusica() {
        $this->musicas->next();

        if(!$this->musicas->valid()) {
            $this->musicas->rewind();
        }
    }

    public function voltarMusica() {
        $this->musicas->prev();

        if(!$this->musicas->valid()) {
            $this->musicas->rewind();
        }
    }

    public function exibirMusicas() {
        for($this->musicas->rewind() ; $this->musicas->valid() ; $this->musicas->next()) {
            echo "Música: " . $this->musicas->current()->getNome() . "<br>";
        }
    }

    public function exibirQuantidadeDeMusicas() {
        echo "Existem " . $this->musicas->count() . " músicas no tocador.";
    }

    public function adicionarMusicaNoComecoDaPlaylist(Musica $musica) {
        $this->musicas->unshift($musica);
    }

    public function removerMusicaDoComecoDaPlaylist() {
        $this->musicas->shift();
    }

    public function removerMusicaDoFinalDaPlaylist() {
        $this->musicas->pop();
    }

    public function baixarMusicas() {

        if($this->musicas->count() > 0) {
            for($this->musicas->rewind(); $this->musicas->valid() ; $this->musicas->next()) {
                $this->filaDeDownloads->push($this->musicas->current());
            }
    
            for($this->filaDeDownloads->rewind(); $this->filaDeDownloads->valid(); $this->filaDeDownloads->next()) {
                echo "Baixando: " . $this->filaDeDownloads->current()->getNome() . "...<br>";
            }
        } else {
            echo "Nenhuma música encontrada para baixar.";
        }

    }

    public function exibirMaisTocadas() {
        foreach($this->musicas as $musica) {
            $this->maisTocadas->insert($musica->paraArray());
        }

        while($this->maisTocadas->valid()) {
            $nome = $this->maisTocadas->current()[0];
            $vezesTocada = $this->maisTocadas->current()[1];

            echo $nome . " - " . $vezesTocada . "<br>";

            $this->maisTocadas->next();
        }
        
    }

}