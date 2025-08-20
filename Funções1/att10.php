<?php

function calcularSubtotal($preco, $quantidade) {
    return $preco * $quantidade;
}

function calcularTotalCompra($itens) {
    $total = 0;

    foreach($itens as $item) {
        $total += calcularSubtotal($item['preco'], $item['quantidade']);
    }

    return $total;
    
}

function aplicarDesconto($total, $possuiFidelidade) {
    if ($possuiFidelidade) {
        return $total * 0.80;
    } else {
        return $total;
    }
}

function gerarCupom($itens, $possuiFidelidade) {
    $totalCompleto = calcularTotalCompra($itens);
    $totalFinal = aplicarDesconto($totalCompleto, $possuiFidelidade);
    $promo = $totalCompleto - $totalFinal;

    echo "Seu cupom fiscal: \n\n";
    foreach($itens as $item) {
        $subtotal = calcularSubtotal($item['preco'], $item['quantidade']);
        echo "Produto: ".$item['nome']."\n";
        echo "Preço original: ".$item['preco']."\n";
        echo "Quantidade: ".$item['quantidade']."\n";
        echo "Subtotal calculado: ".$subtotal."\n\n";
    }

    echo "Resumo dos preços:\n";
    echo "Total completo: R$".number_format($totalCompleto, 2, ',', '.') . ".\n";
    echo "Total final: R$".number_format($totalFinal, 2, ',', '.') . ".\n";

    if($possuiFidelidade) {
        echo "\nDesconto aplicado: ".number_format($promo, 2, ',', '.') . ".\n\n";
    } else {
        echo "\nNão houve desconto.";
    }

}

$itens = [];
$produtos = [
    "1" => ["nome" => "Cacho de banana", "preco" => 14.99],
    "2" => ["nome" => "Tomate", "preco" => 5.99],
    "3" => ["nome" => "Arroz Tio João 1kg", "preco" => 7.99],
    "4" => ["nome" => "Fini Tubes Morango Azedinho", "preco" => 8.99],
    "5" => ["nome" => "Coca-Cola 2 litros", "preco" => 9.99]
];

echo "Bem vindo ao mercadinho Bom Dia! Esses são nossos produtos: \n";
    foreach($produtos as $cod => $produto) {
        echo "$cod - ".$produto['nome']." - ".$produto['preco']."\n";
    }

while(true) {

    $escolha = readline("Digite o código do produto desejado, e digite '0' para parar: \n");

    if ($escolha == 0) {
        if(empty($itens)) {
            echo "Nenhum item no carrinho";
            } else {
                $possuiFidelidade = strtolower(readline("Possui cartão fidelidade? (S/N): ")) == 's';
                gerarCupom($itens, $possuiFidelidade);
            }
        break;
    }

    $quantidade = (int)readline("Digite a quantidade de itens que você irá comprar de ".$produtos[$escolha]['nome'].": ");
    $itens[] = [
        "nome" => $produtos[$escolha]['nome'],
        "preco" => $produtos[$escolha]['preco'],
        "quantidade" => $quantidade
    ];

    echo "Produto adicionado!\n\n";

}

?>