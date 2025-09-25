<?php

class Vendedor
{
    public string $nome;
    public string $email;
    public float $salarioBase;
    public float $percentualComissao;
    public float $totalVendido = 0;

    public function __construct(string $nome, string $email, float $salarioBase)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->salarioBase = $salarioBase;
        $this->percentualComissao = 0.5;
    }

    public function fazerVenda($valor)
    {
        if ($valor > 0) {
            $this->totalVendido += $valor;
            return true;
        } else {
            return false;
        }
    }

    public function salarioTotal()
    {
        return $this->salarioBase + ($this->totalVendido * $this->percentualComissao);
    }
}

$vendedor = new Vendedor("Zé da Esquina", "zedaesquina123@gmail.com", 1550.00);
$vendedor->fazerVenda(500);
$vendedor->fazerVenda(-20);
$vendedor->fazerVenda(7100);
echo "Valor total: ".$vendedor->salarioTotal();