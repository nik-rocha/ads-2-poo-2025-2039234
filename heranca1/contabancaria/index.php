<?php

require_once "ContaBancaria.php";
require_once "ContaCorrente.php";
require_once "ContaPoupanca.php";

$cliente1 = new ContaCorrente("Nicollas", 400);
$cliente1->setLimite(500);
echo $cliente1->getTitular()  . "<br>";

// Saque com sucesso abaixo

// echo $cliente1->sacar(765); 
// echo $cliente1->getSaldo();

// Saque maior que limite e saldo abaixo

echo $cliente1->sacar(902); 
echo $cliente1->getSaldo() . "<br><br>";

$cliente2 = new ContaPoupanca("Douglas", 600);
echo $cliente2->getTitular()  . "<br>";
echo $cliente2->getSaldo() . "<br>";
echo $cliente2->renderJuros(5);
echo $cliente2->getSaldo() . "<br>";