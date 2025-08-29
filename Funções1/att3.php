<?php

function soma($n1, $n2) {

    $adicionar = $n1 + $n2;
    return $adicionar;

}

$num1 = readline("Digite um número: ");
$num2 = readline("Digite outro número: ");

echo "A soma dos dois números é: " . soma($num1, $num2)

?>