<?php

class Conta
{
    public int $numero;
    public string $titular;
    public float $saldo;

    public function __construct(int $numero, string $titular)
    {
        $this->numero = $numero;
        $this->titular = $titular;
        $this->saldo = 0.0;
    }

    public function depositar($valor): bool
    {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "<br>Depósito realizado com sucesso!";
            return true;
        } else {
            echo "<br>Depósito muito baixo!";
            return false;
        }
    }

    public function sacar($valor): bool 
    {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "<br>Saque realizado com sucesso!";
            return true;
        } else {
            echo "<br>Saque inválido!";
            return false;
        }
    }

    public function transferir($valor, Conta $contaDestino): bool
    {
        if ($this->sacar($valor)) {
            if ($contaDestino->depositar($valor)) {
                "<br>Tranferência realizada com sucesso!";
                return true;
            } else {
                $this->depositar($valor);
            }
        }
        return false;
    }
}

$conta1 = new Conta(123456789, "Jefferson");
$conta1->saldo = 1450.00;
$conta1->depositar(500);
$conta1->sacar(50);

$conta2 = new Conta(987654321, "Eduardo");
$conta2->saldo = 300.00;
$conta2->depositar(50);
$conta2->sacar(20);

$conta1->transferir(500, $conta2);      

echo "Saldo da Conta 2: ".$conta2->saldo;