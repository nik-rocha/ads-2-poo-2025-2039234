<?php

class Produto
{

    private string $nome;
    private float $preco;
    private int $estoque = 0;

    public function __construct(string $nome, float $preco, int $estoqueInicial = 0)
    {
        $this->setNome($nome);
        $this->setPreco($preco);
        $this->setEstoque($estoqueInicial);
    }

    public function setNome(string $nome)
    {
        if (empty($nome)) {
            throw new InvalidArgumentException("O nome do produto está vazio.");
        }

        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setPreco(float $preco)
    {
        if ($preco < 0) {
            throw new InvalidArgumentException("Valor de preço inválido.");
        }

        $this->preco = $preco;
    }

    public function getPreco(): string
    {
        return $this->preco;
    }

    public function setEstoque(int $estoqueInicial)
    {
        if ($estoqueInicial < 0) {
            throw new InvalidArgumentException('Estoque inválido.');
        }

        $this->estoque = $estoqueInicial;
    }

    public function getEstoque(): string
    {
        return $this->estoque;
    }

    public function atualizarPreco(float $novoPreco): void
    {
        if ($novoPreco <= 0) {
            throw new InvalidArgumentException("Valor de preço negativo. Um erro ocorreu");
        }

        if(preg_match('/\.\d{2,}/', $novoPreco)) {
            $this->preco = round($novoPreco, 2);
        }

        $this->preco = $novoPreco;
    }

    public function repor(int $qtd): void 
    {
        if ($qtd <= 0 || preg_match('/\.\d{2,}/', $qtd)) {
            throw new InvalidArgumentException("Quantidade inválida.");
        }

        $this->estoque += $qtd;
    }

    public function vender(int $qtd): void
    {
        if ($qtd < 0 || $qtd > $this->estoque || preg_match('/\.\d{2,}/', $qtd)) {
            throw new InvalidArgumentException("Quantidade inválida para venda.");
        }

        $this->estoque -= $qtd;
    }

}