<?php

require 'TocadorDeMusica.php';

$musicas = new SplFixedArray(2);

$musicas[0] = new Musica("One Dance");
$musicas[1] = new Musica("Closer");

$musicas->setSize(4);

$musicas[2] = new Musica("rockstar");
$musicas[3] = new Musica("Love Yourself");

$tocador = new TocadorDeMusica();

$tocador->adicionarMusicas($musicas);

$tocador->adicionarMusicaNoComecoDaPlaylist("Havana");

$tocador->removerMusicaDoComecoDaPlaylist();

$tocador->removerMusicaDoFinalDaPlaylist();

$tocador->exibirMusicas();