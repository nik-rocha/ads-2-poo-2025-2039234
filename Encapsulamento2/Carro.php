<?php

class Carro
{
    private string $marca;
    private string $modelo;
    private int $ano;

    public function __construct(string $marca, string $modelo, int $ano)
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setAno($ano);
    }

    public function setMarca(string $marca)
    {
        if(empty($marca)) {
            throw new InvalidArgumentException("A marca do veículo está vazia.");
        }
        
        $this->marca = $marca;
    }

    public function getMarca(): string
    {
        return $this->marca . "<br>";
    }

    public function setModelo(string $modelo)
    {
        if(empty($modelo)) {
            throw new InvalidArgumentException("O modelo do veículo está vazio.");
        }

        $this->modelo = $modelo;
    }

    public function getModelo(): string
    {
        return $this->modelo . "<br>";
    }

    public function setAno(string $ano)
    {
        if($ano < 1886 || $ano > date("Y")) {
            throw new InvalidArgumentException("O ano do veículo está incorreto.");
        }

        $this->ano = $ano;
    }

    public function getAno()
    {
        return $this->ano . "<br>";
    }

    public function alterarMarca(string $nova): void
    {
        $this->marca = $nova;
    }

    public function alterarModelo(string $modelo): void
    {
        $this->modelo = $novo;
    }

    public function alterarAno(int $ano): void
    {
        $this->ano = $novo;
    }

}

try {
    $carro1 = new Carro('Nissan', 'Sentra', 2024);
    echo $carro1->getMarca();
    echo $carro1->getModelo();
    echo $carro1->getAno();
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}