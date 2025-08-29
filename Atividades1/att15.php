<?php

// $listaCompras = [];

// while (true) {

//     $addItem = readline("Digite um produto para adicionar, e digite 'sair' para parar: ");

//     if($addItem == "sair") {
//         echo "Seu carrinho: " . implode(", ", $listaCompras);
//         break;
//     }

//     array_push($listaCompras, $addItem);

// }

function market($list, $items) {

    $list[] = $items;
    return $list;

};

$listMarket = [];

while (true) {
    
    $addItem = readline("Digite um produto para adicionar, e digite 'sair' para parar: ");

    if($addItem == "sair") {
        market($listMarket, $addItem);
        break;
    }

    $listMarket = market($listMarket, $addItem);
}

echo "Seu carrinho: " . implode(", ", $listMarket);


?>