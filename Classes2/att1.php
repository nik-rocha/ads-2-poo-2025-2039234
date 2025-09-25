<?php

class Empregado
{
    public string $nome;
    public string $sobrenome;
    public string $setor;
    public float $salarioMensal;

    public function __construct(string $nome, string $sobrenome, string $setor, float $salarioMensal)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->setor = $setor;
        $this->salarioMensal = $salarioMensal;
    }

    public function salarioAnual()
    {
        if ($this->salarioMensal <= 0) {
            return false;
        } else {
            $salario = $this->salarioMensal * 12;
            return "Nome do funcionário: {$this->nome} {$this->sobrenome} <br> Setor: {$this->setor} <br> Salário mensal: ". number_format($salario, 2, ',', '') ." <br><br>";
        }
    }
}

$func1 = new Empregado("José", "Souza", "Solda", 1560.0);
$func2 = new Empregado("Charles", "Souza", "Plásticos", 2300.0);

echo $func1->salarioAnual();
echo $func2->salarioAnual();