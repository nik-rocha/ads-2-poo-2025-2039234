<?php

class Item
{
    protected string $nome;
    protected int $tamanho;
    protected string $classe;

    public function __construct(string $nome, int $tamanho, string $classe)
    {
        //get e set
    }

    public function setNome(string $nome): ?string 
    {
        if(empty($nome)) {
            return "Atenção! O nome não foi definido.";
        }

        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setTamanho(int $tamanho): ?string
    {
        if($tamanho <= 0) {
            return "Atenção! O item não possui um tamanho definido.";
        }

        $this->tamanho = $tamanho;
    }
}