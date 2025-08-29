<?php

$num = readline("Digite um número: ");

$count = 1;

while ($count <= 10) {
    $mult = $num * $count;
    echo "A tabuada de $num x $count é igual a: $mult \n";
    $count++;
}

?>