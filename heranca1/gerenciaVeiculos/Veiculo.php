<?php

class Veiculo
{
    protected string $marca;
    protected string $modelo;
    protected int $ano;
    protected float $velocidadeAtual = 0;

    public function __construct(string $marca, string $modelo, int $ano)
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setAno($ano);
    }

    public function setMarca(string $marca) {
        if (empty($marca)) {
            return "A marca está vazia.";
        }

        $this->marca = $marca;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function setModelo(string $modelo)
    {
        if (empty($modelo)) {
            return "O modelo está vazio. <br>";
        }

        $this->modelo = $modelo;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setAno(int $ano)
    {
        $anoLimite = date('Y') + 1;
        if ($ano < 0 || $ano > $anoLimite) {
            return "Ano inválido de veículo. <br>";
        }

        $this->ano = $ano;
    }

    public function getAno(): int
    {
        return $this->ano;
    }

    public function acelerar($quantia): string
    {
        $this->velocidadeAtual += $quantia;
        return "(".get_class($this) . " {$this->marca} {$this->modelo}) Velocidade atual: {$this->velocidadeAtual}km/h <br>";
    }

    public function frear($quantia): string
    {
        if ($quantia > $this->velocidadeAtual) {
            return "Impossível frear!";
        }

        $this->velocidadeAtual -= $quantia;
        return "(".get_class($this) . " {$this->marca} {$this->modelo}) Velocidade atual: {$this->velocidadeAtual}km/h após frear <br>";
    }
}