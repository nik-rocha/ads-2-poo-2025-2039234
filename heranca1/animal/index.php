<?php

require_once "Animal.php";
require_once "Cachorro.php";
require_once "Gato.php";
require_once "Pato.php";

$animais = [
    new Cachorro("Rex"),
    new Gato("Marry"),
    new Pato("Donald")
];

foreach ($animais as $animal) {
    echo $animal->descrever(). "<br>";
    echo "Som {$animal->fazBarulho()}<br>";

    echo str_repeat('-', 30) . "<br>";
}