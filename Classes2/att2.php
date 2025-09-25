<?php

class Aluno
{
    public string $nome;
    public int $ra;
    public string $curso;
    public string $disciplina;
    public float $notaP1;
    public float $notaP2;

    public function __construct(string $nome, int $ra, string $disciplina)
    {
        $this->nome = $nome;
        $this->ra = $ra;
        $this->disciplina = $disciplina;
    }

    public function calcularMedia()
    {
        return ($this->notaP1 + $this->notaP2) / 2;
    }

    public function situacao()
    {
        $media = $this->calcularMedia();

        if ($media >= 7) {
            return "Aluno {$this->nome}: Aprovado ({$media}) <br><br>";
        } elseif ($media >= 5) {
            return "Aluno {$this->nome}: Exame <br> ({$media}) <br><br>";
        } else {
            return "Aluno {$this->nome}: Reprovado ({$media}) <br><br>";
        }
    }
}


$aluno = new Aluno("Nicollas", 2039234, "POO");
$aluno->curso = "ADS";
$aluno->notaP1 = 10.0;
$aluno->notaP2 = 5.0; 

$aluno2 = new Aluno("Nicollas", 2039234, "POO");
$aluno2->curso = "ADS";
$aluno2->notaP1 = 7.0;
$aluno2->notaP2 = 2.0;

echo $aluno->situacao();
echo $aluno2->situacao();