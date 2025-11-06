<?php

require_once 'Veiculo.php';

class Carro extends Veiculo
{
    private int $portas = 4;

    public function setPortas(int $portas): string
    {
        if ($portas <= 0 || $portas > 4) {
            return "Que carro insano é esse seu? <br>";
        }

        $this->portas = $portas;
        return "Portas declaradas. <br>";
    }

    public function getPortas(): string
    {
        return $this->portas;
    }

    public function abrirPortas($numeroPorta): string
    {
        if ($numeroPorta > $this->portas) {
            return "Essa porta não existe. <br>";
        }

        return "A porta número {$numeroPorta} foi aberta. <br>";
    }
}