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
            return "Valor indisponível para saque. <br>";
        } elseif($valor <= $this->getSaldo()) {
            $this->setSaldo($this->getSaldo() - $valor);
            return "Saque de R\${$valor} realizado. R\$0 do seu limite foi utilizado.";
        } elseif($valor > $this->getSaldo() && $valor <= ($this->getSaldo() + $this->limite)) {
            $limiteUsado = $valor - $this->getSaldo();
            $this->setSaldo(0);
            return "Saque de R\${$valor} realizado. R\${$limiteUsado} do seu limite foi utilizado.";
        } elseif($this->getSaldo() < $valor && $valor > ($this->getSaldo() + $this->limite)) {
            return "Valor inválido para saque.";
        }

        return "Um erro ocorreu.";
    }
}