<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
  'Thor - Ragnarok',
  2017,
  'super-heroi'
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . PHP_EOL;
echo $filme->anoLancamento . PHP_EOL;