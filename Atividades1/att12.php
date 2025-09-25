<?php

$city = readline("Digite uma cidade para verificar se ela está na lista: ");

$cities = ["Marília","Pompeia","Maringá","Londrina","Bauru"];

if (in_array($city, $cities)) {
    echo "Sua cidade está na lista!";
} else {
    echo "Sua cidade não está na lista :(";
}

?>