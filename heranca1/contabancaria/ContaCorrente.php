<?php

require_once "ContaBancaria.php";

class ContaCorrente extends ContaBancaria
{
    private float $limite = 0;

    public function setLimite(float $limite)
    {
        if ($limite < 0) {
            return "Limite inválido";
        }

        $this->limite = $limite;
    }

    public function getLimite(): float
    {
        return $this->limite;
    }

    public function sacar($valor): string
    {
        if ($valor <= 0 || $valor > $this->getSaldo() + $this->limite) {
            return "Valor indisponível para saque.";
        }

        if($valor > $this->limite) {
            $this->setSaldo($this->getSaldo() - ($valor - $this->limite));
            return "Saque de R\${$valor} realizado.";
        } else {
            return "Saque de R\${$valor} realizado.";
        }
    }
}