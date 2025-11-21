<?php

require_once('Player.php');
require_once('./Itens/Ataque.php');
require_once('./Itens/Defesa.php');
require_once('./Itens/Magia.php');

$player1 = new Player("oPerebas");
$player2 = new Player("saberePo");

$ataque1 = new Ataque("Machado de Energia");
$ataque2 = new Ataque("Espada de Sangue");

$defesa1 = new Defesa("Escudo de Morte");
$defesa2 = new Defesa("Armadura do Conhecimento");

$magia1 = new Magia("Desconjuração");
$magia2 = new Magia("Inexistir");

echo $player1->coletarItem($ataque1);
echo $player1->coletarItem($defesa2);
echo $player1->coletarItem($magia1);

echo $player1->getInventario()->capacidadeLivre();

echo $player1->soltarItem($defesa2);

echo $player1->getInventario()->capacidadeLivre();

echo $player1->subirNivel();

echo $player1->getInventario()->capacidadeLivre();
echo $player1->coletarItem($magia2);
echo $player1->coletarItem($defesa1);
echo $player1->coletarItem($ataque2);

echo $player1->getInventario()->capacidadeLivre();

echo $player1->subirNivel();

echo $player1->getInventario()->capacidadeLivre();

echo $player2->coletarItem($ataque2);
echo $player2->coletarItem($ataque2);

echo $player2->getInventario()->capacidadeLivre();

echo $player2->coletarItem($ataque2);

echo $player2->getInventario()->capacidadeLivre();

echo $player2->soltarItem($ataque2);
echo $player2->soltarItem($ataque2);
echo $player2->soltarItem($ataque2);

echo $player2->getInventario()->capacidadeLivre();
