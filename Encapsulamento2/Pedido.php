<?php

require_once 'Produto.php';

class Pedido
{
    private string $numeroPedido;
    private array $itens = [];
    private float $valorTotal = 0;

    public function __construct(string $numeroPedido)
    {
        $this->setNumeroPedido($numeroPedido);
    }

    public function setNumeroPedido(string $numeroPedido)
    {
        if (empty($numeroPedido)) {
            throw new InvalidArgumentException("O número do pedido está vazio.");
        }

        if ($numeroPedido < 0) {
            throw new InvalidArgumentException("O número do pedido está incorreto.");
        }

        $this->numeroPedido = $numeroPedido;
    }

    public function getNumeroPedido(): string
    {
        return $this->numeroPedido;
    }

    public function getItens(): array
    {
        return $this->itens;
    }

    public function getValorTotal(): float
    {
        return $this->valorTotal;
    }

    public function adicionarItem(Produto $produto, int $qtd): void
    {
        if ($qtd <= 0 || preg_match('/\.\d{2,}/', $qtd)) {
            throw new InvalidArgumentException("Quantidade inválida.");
        }

        if ($produto->getEstoque() <= 0) {
            throw new InvalidArgumentException("O estoque foi esvaziado.");
        }

        $produto->vender($qtd);

        $this->itens[] = [
            'nome' => $produto->getNome(),
            'preco' => $produto->getPreco(),
            'produto' => $produto,
            'quantidade' => $qtd,
            'subtotal' => $produto->getPreco() * $qtd
        ];

        $this->valorTotal += ($produto->getPreco() * $qtd);
    }

    public function removerItem(string $nomeProduto): void
    {
        foreach ($this->itens as $index => $item) {
            if ($item['produto']->getNome() === $nomeProduto) {
                $item['quantidade'] -= 1;

                $item['produto']->repor(1);

                $this->valorTotal -= ($item['produto']->getPreco());

                if ($item['quantidade'] <= 0) {
                    unset($this->itens[$index]);
                    $this->itens = array_values($this->itens);
                    return;
                }

                return;
            }
        }

        throw new InvalidArgumentException("O nome do produto está incorreto.");
    }

    public function exibirResumo(): string
    {
        $itensFormatados = print_r($this->itens, true);
        return "Bem-vindo! Pedido nº {$this->numeroPedido} <br><pre>{$itensFormatados}<pre><br>Valor total: {$this->valorTotal} <br>";
    }
}

$produto1 = new Produto('Coca-Cola 2L', 8.00, 4);
$produto2 = new Produto('Fone Bluethoot Redragon Zeus X', 500.00, 2);

try {
    $pedido1 = new Pedido(45);
    $pedido1->adicionarItem($produto1, 2);
    $pedido1->adicionarItem($produto2, 1);
    echo $pedido1->exibirResumo();
    "<br>";
    $pedido1->removerItem('Fone Bluethoot Redragon Zeus X');
    echo $pedido1->exibirResumo();
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}