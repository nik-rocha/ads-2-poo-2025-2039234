<?php

class Disciplina
{
    public string $nome;
    public float $notaTrabalho;
    public float $notaProva;

    public function __construct(string $nome, float $notaTrabalho, float $notaProva)
    {
        $this->nome = $nome;
        $this->notaTrabalho = $notaTrabalho;
        $this->notaProva = $notaProva;
    }

    public function calcularMediaPonderada()
    {
        return ($this->notaTrabalho * 0.4) + ($this->notaProva * 0.6);
    }

    public function situacao()
    {
        $media = $this->calcularMediaPonderada();

        if ($media >= 7) {
            echo "Aprovado";
        } elseif ($media >= 5) {
            echo "Exame";
        } else {
            echo "Reprovado";
        }
    }
}

$disciplina = new Disciplina("Carlinhos", 10, 8.5);
echo $disciplina->situacao();