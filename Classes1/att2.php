<?php

class Produto
{
    public string $nome;
    public float $preco;

    public function __construct(string $nome, float $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function aplicarDesconto(int $percentual): void 
    {
        $desconto = $this->preco * ($percentual / 100);
        $this->preco -= $desconto;
    }

    public function exibirPreco(): string
    {
        return "O produto {$this->nome} teve o preço alterado para R\${$this->preco}.";
    }

}   

$produto = new Produto("Pastel de Frango", 20.00);
$produto->aplicarDesconto(20);
echo $produto->exibirPreco();