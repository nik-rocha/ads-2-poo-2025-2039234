<?php

require_once "Veiculo.php";

class Moto extends Veiculo
{
    public function empinar()
    {
        if ($this->velocidadeAtual < 20) {
            return "Impossível empinar a moto! <br>";
        }

        return "A moto {$this->marca} {$this->modelo} está empinando. <br>";
    }
}