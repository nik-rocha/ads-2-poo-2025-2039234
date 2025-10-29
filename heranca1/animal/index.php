<?php

require_once "Animal.php";
require_once "Cachorro.php";
require_once "Gato.php";

$animal = new Animal("Snow");
$cachorro = new Cachorro("Rex");
$gato = new Gato("Sushi");

echo $animal->descrever()."<br>";
echo $animal->fazBarulho()."<br>";

echo $cachorro->descrever()."<br>";
echo $cachorro->fazBarulho()."<br>";

echo $gato->descrever()."<br>";
echo $gato->fazBarulho()."<br>";