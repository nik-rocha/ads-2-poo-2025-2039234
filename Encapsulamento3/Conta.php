<?php

class Conta
{
    private string $banco;
    private int $agencia;
    private int $numeroConta;
    private float $saldo;

    public function __construct(string $banco, int $agencia, int $numeroConta, float $saldo)
    {
        $this->setBanco($banco);
        $this->setAgencia($agencia);
        $this->setNumeroConta($numeroConta);
        $this->setSaldo($saldo);
    }

    public function getBanco(): string
    {
        return $this->banco;
    }

    public function setBanco(string $banco): bool
    {
        if (empty($banco)) {
            return false;
        }

        $this->banco = $banco;
        return true;
    }

    public function getAgencia(): int
    {
        return $this->agencia;
    }

    public function setAgencia(string $agencia): bool
    {
        if (empty($agencia)) {
            return false;
        }

        if ($agencia < 0) {
            return false;
        }

        $this->agencia = $agencia;
        return true;
    }

    public function getNumeroConta(): int
    {
        return $this->numeroConta;
    }

    public function setNumeroConta(int $numeroConta): bool
    {
        if (empty($numeroConta)) {
            return false;
        }

        if ($numeroConta < 0) {
            return false;
        }

        $this->numeroConta = $numeroConta;
        return true;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function setSaldo(int $saldo): bool
    {
        if (empty($saldo)) {
            return false;
        }

        if ($saldo < 0) {
            $saldo = 0;
        }

        $this->saldo = $saldo;
        return true;
    }

    public function depositar($valor): bool
    {
        if ($valor > 0) {
            $this->saldo += $valor;
            return true;
        }

        return false;
    }

    public function saque($valor): float
    {
        if ($valor > 0 && $valor < $this->saldo) {
            $this->saldo -= $valor;
            return $valor;
        }

        return false;
    }

    public function lerConta(): void
    {
        echo "<br><br>Bem-vindo!<br>Banco: {$this->banco}<br>Agência: {$this->agencia}<br>Número da conta: {$this->numeroConta}<br><br>Saldo: {$this->saldo}<br>";
    }

}

$conta1 = new Conta("Bradesco", 20013, 44, -10);
$conta1->lerConta();
$conta1->depositar(500);
echo $conta1->getSaldo() . "<br>";
$conta1->saque(200);
echo $conta1->getSaldo();
$conta1->lerConta();

$conta2 = new Conta("NuBank", 10025, 58, 450);
$conta2->lerConta();
$conta2->depositar(200);
echo $conta2->getSaldo() . "<br>";
$conta2->saque(649);
echo $conta2->getSaldo();
$conta2->lerConta();