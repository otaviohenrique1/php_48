<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Calculos/CalculadoraDeMaratona.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
  'Thor - Ragnarok',
  2017,
  Genero::SuperHeroi,
  130
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . PHP_EOL;
echo $filme->anoLancamento . PHP_EOL;

$serie = new Serie('Lost', 2007, Genero::Drama, 10, 20, 30);
echo $serie->anoLancamento . "\n";
$serie->avalia(8);
echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();
echo "Para essa maratona, você precisa de $duracao minutos";
