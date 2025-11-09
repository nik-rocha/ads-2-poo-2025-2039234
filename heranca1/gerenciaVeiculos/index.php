<?php

require_once 'Veiculo.php';
require_once 'Carro.php';
require_once 'Moto.php';

$carro1 = new Carro("Toyota", "Corolla", 2018);
$carro1->setPortas(4);
echo $carro1->acelerar(50);
echo $carro1->abrirPortas(1);

$moto1 = new Moto("Yamaha", "MT-07", 2018);
echo $moto1->acelerar(30);
echo $moto1->empinar();

echo $carro1->frear(20);
echo $moto1->frear(20);