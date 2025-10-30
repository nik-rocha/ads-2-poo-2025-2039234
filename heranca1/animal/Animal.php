<?php

class Animal
{
    private string $nome;

    public function __construct(string $nome)
    {
        $this->setNome($nome);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        if(!empty($nome)) {
            $this->nome = $nome;
        } else {
            $this->nome = "Animal vazio";
        }
    }

    public function fazBarulho(): string
    {
        return "Animal fazendo barulho!";   
    }

    public function descrever(): string
    {
        return "Eu me chamo Animal {$this->nome}";
    }
}
