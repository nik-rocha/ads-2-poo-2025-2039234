<?php

require_once '../Produto.php';

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
                $item['produto']->repor($item['quantidade']);

                $this->valorTotal -= ($item['produto']->getPreco() * $item['quantidade']);

                unset($this->itens[$index]);
                $this->itens = array_values($this->itens);
                return;
            }
        }

        throw new InvalidArgumentException("O nome do produto está incorreto.");
    }

    public function exibirResumo(): string
    {
        $itensFormatados = print_r($this->itens, true);
        return "Bem-vindo! Pedido nº {$this->numeroPedido} <br><pre>{$itensFormatados}<pre><br>Valor total: " .number_format($this->valorTotal, 2)."<br>";
    }
}

$produto1 = new Produto('Teclado', 120.00, 10);

try {
    $pedido1 = new Pedido('P-001');
    $pedido1->adicionarItem($produto1, 2);
    echo $pedido1->exibirResumo();
    echo "<br>";
    // $pedido1->adicionarItem($produto1,50);
    // echo "<br>";

    // ^ tirar do comentário para ver erro
    $pedido1->removerItem('Teclado');
    echo $pedido1->exibirResumo();
    echo "<br>";

    // $produto1->atualizarPreco(150.00);
    // $pedido1->adicionarItem($produto1, 2);
    // echo $pedido1->exibirResumo();

    // ^ tirar do comentário para ver o cenário com o novo preço
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}