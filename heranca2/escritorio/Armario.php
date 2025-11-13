<?php

require_once "Gaveta.php";

class Armario
{
    private array $gavetas = [];

    public function setGavetas(array $gavetas) {
        $this->gavetas = $gavetas;
    }

    public function getGavetas(): array
    {
        return $this->gavetas;
    }

    public function adicionarGaveta(Gaveta $gaveta)
    {
        if(empty($gaveta)) {
            return "Nenhuma gaveta adicionada!";
        }

        $this->gavetas[] = $gaveta;
    }

    public function removerGaveta(int $indice): void
    {
        array_splice($this->gavetas, $indice, 1);
    }

    public function listarGavetas(): array
    {
        return $this->gavetas;
    }
}