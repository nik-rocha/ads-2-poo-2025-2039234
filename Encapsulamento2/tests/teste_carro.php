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
            throw new InvalidArgumentException("A marca do veículo está vazia. <br>");
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
            throw new InvalidArgumentException("O modelo do veículo está vazio. <br>");
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
            throw new InvalidArgumentException("O ano do veículo está incorreto. <br>");
        }

        $this->ano = $ano;
    }

    public function getAno()
    {
        return $this->ano . "<br>";
    }

    public function alterarMarca(string $nova): void
    {
        if(empty($nova)) {
            throw new InvalidArgumentException("A marca alterada do veículo está vazia. <br>");
        }

        $this->marca = $nova;
    }

    public function alterarModelo(string $novo): void
    {

        if(empty($novo)) {
            throw new InvalidArgumentException("O modelo alterado do veículo está vazio. <br>");
        }

        $this->modelo = $novo;
    }

    public function alterarAno(int $novo): void
    {
        if($novo < 1886 || $novo > date("Y")) {
            throw new InvalidArgumentException("O ano alterado do veículo está incorreto. <br>");
        }

        $this->ano = $novo;
    }

}

try {
    $carro1 = new Carro('Fiat', 'Uno', 2015);
    echo $carro1->getMarca();
    echo $carro1->getModelo();
    echo $carro1->getAno();

} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

try {
    $carro2 = new Carro('', 'Palio', 2024);
    echo $carro2->getMarca();
    echo $carro2->getModelo();
    echo $carro2->getAno();

} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

try {
    $carro3 = new Carro('Audi', '', 2024);
    echo $carro3->getMarca();
    echo $carro3->getModelo();
    echo $carro3->getAno();

} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

try {
    $carro4 = new Carro('Citroen', 'C4', 2024);
    echo $carro4->getMarca();
    echo $carro4->getModelo();
    echo $carro4->getAno();

    $carro4->alterarModelo('C280');
    echo $carro4->getMarca();
    echo $carro4->getModelo();
    echo $carro4->getAno();
    
    $carro4->alterarAno(1866);
    echo $carro4->getMarca();
    echo $carro4->getModelo();
    echo $carro4->getAno();

} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}