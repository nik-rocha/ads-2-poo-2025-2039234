<?php

require_once 'Item.php';

class Documento extends Item
{
    protected string $dataCriacao;

    public function setDataCriacao(string $dataCriacao) {
        if(empty($dataCriacao)) {
            return "A data de criação do documento está vazia.<br>";
        }

        $this->dataCriacao = $dataCriacao;
    }

    public function getDataCriacao(): string
    {
        return $this->dataCriacao;
    }
}