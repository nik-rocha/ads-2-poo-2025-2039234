<?php

class Item
{
    protected string $nome;
    protected int $tamanho;
    protected string $classe;

    public function __construct(string $nome, int $tamanho, string $classe)
    {
        $this->setNome($nome);
        $this->setTamanho($tamanho);
        $this->setClasse($classe);
    }

    public function setNome(string $nome) 
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

    public function setTamanho(int $tamanho)
    {
        if($tamanho <= 0) {
            return "Atenção! O item não possui um tamanho definido.";
        }

        $this->tamanho = $tamanho;
    }

    public function getTamanho(): int
    {
        return $this->tamanho;
    }

    public function setClasse(string $classe)
    {
        if(empty($classe)) {
            return "Atenção! O item não possui uma classe definida.";
        }

        $this->classe = $classe;
    }

    public function getClasse(): string
    {
        return $this->classe;
    }
}