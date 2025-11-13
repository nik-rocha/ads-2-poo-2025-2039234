<?php

class Item
{
    protected string $nome;
    protected string $descricao;

    public function __construct(string $nome, string $descricao)
    {
        $this->setNome($nome);
        $this->setDescricao($descricao);
    }

    public function setNome(string $nome)
    {
        if(empty($nome)) {
            return "O nome está vazio.<br>";
        }

        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setDescricao(string $descricao)
    {
        if(empty($descricao)) {
            return "A descricao está vazia.<br>";
        }

        $this->descricao = $descricao;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }
}