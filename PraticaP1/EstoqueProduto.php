<?php

//Nome: Nicollas da Silva Rocha
//RA: 2039234

class EstoqueProduto
{
    public string $nome;
    public float $precoUnitario;
    public int $quantidade;

    public function __construct(string $nome, float $precoUnitario)
    {
        $this->nome = $nome;
        $this->precoUnitario = $precoUnitario;
        $this->quantidade = 0;
    }

    public function repor($qtd): bool
    {
        if ($qtd > 0) {
            $this->quantidade += $qtd;
            echo "Item adicionado ao estoque ({$this->nome}). Tamanho do estoque: {$this->quantidade}<br><br>";
            return true;
        } else {
            echo "Valor inválido ({$qtd}). Estoque atual: {$this->quantidade}<br><br>";
            return false;
        }
    }

    public function retirar($qtd): bool
    {
        if ($qtd > 0 && $qtd <= $this->quantidade) {
            $this->quantidade -= $qtd;
            echo "Item removido do estoque ({$this->nome}). Tamanho do estoque: {$this->quantidade}<br><br>";
            return true;
        } else {
            echo "Valor inválido ({$qtd}). Estoque atual: {$this->quantidade}<br><br>";
            return false;
        }
    }

    public function aplicarDesconto($percentual)
    {
        if ($this->precoUnitario > 0 && $this->precoUnitario <= 100) {
            $desconto = $this->precoUnitario -  ($this->precoUnitario * $percentual / 100);
            $this->precoUnitario = $desconto;
            echo "Desconto aplicado! Valor atual: ".($desconto)."<br><br>";
        } else {
            echo "Valor inválido ({$qtd}). Estoque atual: {$this->quantidade}<br><br>";
            return false;
        }
    }

    public function valorEmEstoque()
    {
        return "Valor em estoque: ".number_format($this->precoUnitario * $this->quantidade, 2, ".")."<br><br>";
    }
}

$cafe = new EstoqueProduto("Café 500g", 18.50);
echo $cafe->repor(20);
echo $cafe->valorEmEstoque();

echo $cafe->retirar(5);
echo $cafe->valorEmEstoque();

echo $cafe->retirar(30);

echo $cafe->aplicarDesconto(10);
echo $cafe->valorEmEstoque();