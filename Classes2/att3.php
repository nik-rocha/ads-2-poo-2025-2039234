<?php

class Cartao
{
    public string $banco;
    public string $bandeira;
    public float $limite;
    public float $fatura;

    public function __construct(string $banco, string $bandeira, float $limite)
    {
        $this->banco = $banco;
        $this->bandeira = $bandeira;
        $this->limite = $limite;
        $this->fatura = 0.0;
    }

    public function fazerCompra($valor)
    {
        if ($valor <= ($this->limite - $this->fatura)) {
            $this->fatura += $valor;
            echo "Compra realizada!";
            return true;
        } else {
            echo "Saldo insuficiente.";
            return false;
        }
    }
}

$cartao = new Cartao("Bradesco", "MasterCard", 2000.00);
$cartao->fazerCompra(1900.00);