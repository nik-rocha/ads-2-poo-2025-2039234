<?php

require_once "ContaBancaria.php";

class ContaPoupanca extends ContaBancaria
{
    public function renderJuros(float $taxa)
    {
        $saldoRendido = ($this->getSaldo() * $taxa) / 100;

        if ($taxa < 0 || $taxa > 100) {
            return "Taxa inválida.";
        }

        $this->setSaldo($this->getSaldo() + $saldoRendido);
        return "Taxa de {$taxa}% adicionada ao saldo.";
    }
}