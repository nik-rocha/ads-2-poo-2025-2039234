<?php

require_once "ContaBancaria.php";

class ContaCorrente extends ContaBancaria
{
    private float $limite;

    //public function Aqui você constrói o saldo

    public function sacar($valor): string
    {
        if ($valor <= 0 || $valor > $this->getSaldo() + $this->limite) {
            return "Valor indisponível para saque.";
        }

        $this->setSaldo($this->getSaldo() - $valor);

        return "Saque de R${$valor} realizado.";
    }
}