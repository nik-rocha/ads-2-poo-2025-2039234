<?php

class Terreno
{
    public float $largura;
    public float $comprimento;
    public float $precoPorMetro;

    public function __construct(float $largura, float $comprimento, float $precoPorMetro)
    {
        $this->largura = $largura;
        $this->comprimento = $comprimento;
        $this->precoPorMetro = $precoPorMetro;
    }

    public function area()
    {
        return $this->largura * $this->comprimento;
    }

    public function precoTotal()
    {
        $area = $this->area();
        return $area * $this->precoPorMetro;
    }
}

$terreno1 = new Terreno(4850.00, 3300.50, 75);
$terreno1->area();
echo number_format($terreno1->precoTotal(), 2);