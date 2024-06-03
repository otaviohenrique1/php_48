<?php

class Filme
{
  private array $notas;

  public function __construct(
    public readonly string $nome,
    public readonly int $anoLancamento,
    public readonly string $genero
  ) {
    $this->notas = [];
  }

  public function avalia(float $nota): void
  {
    $this->notas[] = $nota;
  }

  public function media(): float
  {
    $somaNotas = array_sum($this->notas);
    $quantidadeNotas = count($this->notas);
    return $somaNotas / $quantidadeNotas;
  }

  // public function nome(): string
  // {
  //   return $this->nome;
  // }
  
  // public function anoLancamento(): int
  // {
  //   return $this->anoLancamento;
  // }
  
  // public function genero(): string
  // {
  //   return $this->genero;
  // }

  // public function defineNome(string $nome)
  // {
  //   $this->nome = $nome;
  // }
  
  // public function defineAnoLancamento(int $anoLancamento)
  // {
  //   $this->anoLancamento = $anoLancamento;
  // }
  
  // public function defineGenero(string $genero)
  // {
  //   $this->genero = $genero;
  // }
}
