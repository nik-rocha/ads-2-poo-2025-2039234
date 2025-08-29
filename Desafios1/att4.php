<?php

$array = [10, 20, 30, 40, 50];

$x = readline("Digite um número decimal e verifique se ele está na lista: ");

$indice = array_search($x, $array);

if($indice) {
    echo "Seu item foi encontrado! Posição: ".$indice + 1;
} else {
    echo "Seu item não foi encontrado!";
}

?>