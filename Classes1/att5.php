<?php

class ContaBancaria
{
    public string $titular;
    public float $saldo;
    
    public function __construct(string $titular, float $saldo)
    {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar(float $valor) 
    {
        if ($valor <= 0) {
            echo "Valor de depósito inválido.";
            return false;
        } else {
            $this->saldo += $valor;
            return number_format($this->saldo, 2, ',', '');
        }
    }

    public function sacar(float $valor)
    {
        if ($valor > $this->saldo) {
            echo "<br> Limite muito baixo.";
            return false;
        } elseif ($this->saldo <= 0) {
            "<br> Limite indisponível.";
            return false;
        } else {
            $this->saldo -= $valor;
            return number_format($this->saldo, 2, ',', '');
        }
    }

    public function exibirSaldo(): string
    {
        return "<br> Saldo atual: " . number_format($this->saldo, 2, ',', '');
    }

}

$contaBancaria = new ContaBancaria("Nicollas", 2000.00);
echo "Saldo após depósito: " . $contaBancaria->depositar(50.50);
echo "<br> Saldo após saque: " . $contaBancaria->sacar(30.00);
echo $contaBancaria->exibirSaldo();