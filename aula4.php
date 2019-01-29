<?php

require 'MaisTocadas.php';
require 'Musica.php';
require 'TocadorDeMusica.php';

$musicas = new SplFixedArray(4);
$musicas[0] = new Musica("wonderful life");
$musicas[1] = new Musica("amo");
$musicas[2] = new Musica("Closer");
$musicas[3] = new Musica("Love Yourself");

$tocador = new TocadorDeMusica();
$tocador->adicionarMusicas($musicas);

$tocador->tocarMusica();
$tocador->tocarMusica();

$tocador->avancarMusica();

$tocador->tocarMusica();
$tocador->tocarMusica();
$tocador->tocarMusica();
$tocador->tocarMusica();
$tocador->tocarMusica();

$tocador->avancarMusica();

$tocador->tocarMusica();
$tocador->tocarMusica();
$tocador->tocarMusica();

$tocador->avancarMusica();

$tocador->tocarMusica();

$tocador->exibirMaisTocadas();