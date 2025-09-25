<?php

require_once "ProdutoSimples.php";

class ItemPedido
{
    public ProdutoSimples $produto;
    public int $quantidade;

    public function __construct(ProdutoSimples $produto, int $quantidade)
    {
        $this->produto = $produto;
        $this->quantidade = $quantidade;
    }

    public function subtotal()
    {
        return $this->produto->preco * $this->quantidade;
    }
}

$pedido1 = new ProdutoSimples("RTX 4050", 4500.00);

$item1 = new ItemPedido($pedido1, 3);

echo "Subtotal de sua compra: ".number_format($item1->subtotal(), 2, ",", ".");