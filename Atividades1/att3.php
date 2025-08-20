<?php

    $num1 = readline("Digite um número: ");
    $num2 = readline("Digite outro número: ");

    $soma = $num1 + $num2;
    $sub = $num1 - $num2;
    $multi = $num1 * $num2;
    $div = $num1 / $num2;
    $resdiv = $num1 % $num2;

    echo "CALCULADORA: Seus resultados são:
    Soma: $soma
    Subtração: $sub
    Multiplicação: $multi
    Divisão: $div
    Resto da divisão: $resdiv"
?>