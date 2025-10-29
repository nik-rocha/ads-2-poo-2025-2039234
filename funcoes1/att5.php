<?php

function quadrado($n) {

    $qua = $n ** 2;
    return $qua;
}

function mostrarQuadrado($n) {

    echo "Seu número ao quadrado é: " . quadrado($n);
}

$num = readline("Digite um número: ");

mostrarQuadrado($num)

?>