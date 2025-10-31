<?php

class ContaBancaria
{
    private string $titular;
    private float $saldo;

    public function __construct(string $titular, float $saldo)
    {
        $this->setTitular($titular);
        $this->setSaldo($saldo);
    }

    public function getTitular(): string
    {
        return $this->titular;
    }

    public function setTitular(string $titular)
    {
        if (empty($titular)) {
            return "Nome de titular vazio.";
        }

        $this->titular = $titular;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function setSaldo(float $saldo)
    {
        if ($saldo <= 0) {
            return "Valor de saldo inválido.";
        }

        $this->saldo = $saldo;
    }

    public function depositar($valor)
    {
        if ($valor <= 0) {
            return "Valor de depósito inválido.";
        }

        $this->saldo += $valor;
    }

    public function sacar($valor): string
    {
        if ($valor <= 0 || $valor > $this->saldo) {
            return "Valor de saque inválido.";
        }

        $this->saldo -= $valor;
        return "Foram sacados R${$valor} de seu saldo.";
    }
}