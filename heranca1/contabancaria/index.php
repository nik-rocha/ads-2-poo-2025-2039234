<?php

require_once "ContaBancaria.php";
require_once "ContaCorrente.php";
require_once "ContaPoupanca.php";

$cliente1 = new ContaCorrente("Nicollas", 400);
$cliente1->setLimite(500);
echo $cliente1->sacar(900); 
echo $cliente1->getSaldo(); 