<?php

$filme = [
  'nome' => $_POST['nome'],
  'anoLancamento' => $_POST['ano'],
  'nota' => $_POST['nota'],
  'genero' => $_POST['genero'],
];

file_put_contents('filme.json', json_encode($filme));

// echo 'Filme salvo' . PHP_EOL;

header('Location: /sucesso.php?filme=' . $filme['nome']);