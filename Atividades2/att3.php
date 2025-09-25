<?php

class Aluno
{
    public string $nome;
    public string $matricula;
    public array $notas;

    public function __construct(string $nome, string $matricula, array $notas)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;  
        $this->notas = $notas;
    }

    public function calcularMedia()
    {
        $somaTodos = 0;
        foreach($this->notas as $nota) {
            $somaTodos += $nota;
        }

        $media = $somaTodos / count($this->notas);
        $notasFormatadas = implode(", ", $this->notas);
        return "<br> A média de notas do aluno ({$notasFormatadas}) foi de: {$media}";
    }

    public function exibirDados(): string
    {
        return "O aluno {$this->nome} possui o código de matrícula {$this->matricula}.";
    }
}

$aluno = new Aluno("Nicollas Rocha", "2039234", [10, 7, 6, 8]);
echo $aluno->exibirDados();
echo $aluno->calcularMedia();