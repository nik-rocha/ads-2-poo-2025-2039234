<?php

class Filme
{
    public string $titulo;
    public int $duracaoMin;
    public string $classificacao;

    public function __construct(string $titulo, int $duracaoMin, string $classificacao)
    {
        $this->titulo = $titulo;
        $this->duracaoMin = $duracaoMin;
        $this->classificacao = $classificacao;
    }

    public function descricaoCurta()
    {
        return "{$this->titulo} - {$this->duracaoMin}min - Classificação: {$this->classificacao}";
    }
}

$filme = new Filme("Homem-Aranha no Aranhaverso 2", 140, "16 anos");
echo $filme->descricaoCurta();