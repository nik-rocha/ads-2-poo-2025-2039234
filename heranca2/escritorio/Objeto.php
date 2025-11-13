<?php

require_once 'Item.php';

class Objeto extends Item
{
    protected float $peso;

    public function setPeso(float $peso) {
        if(empty($peso)) {
            return "O peso do objeto não foi definido.<br>";
        }

        $this->peso = $peso;
    }

    public function getPeso(): float
    {
        return $this->peso;
    }
}