<?php

require_once "Armario.php";
require_once "Documento.php";
require_once "Escritorio.php";
require_once "Gaveta.php";
require_once "Item.php";
require_once "Objeto.php";
require_once "Pasta.php";

$item1 = new Objeto("Glock .36", "Arma de Fogo");
$item1->setPeso(0.50);
$item2 = new Documento("To Kill a Mockingbird", "Livro americano");
$item2->setDataCriacao("11/07/1960");
$item3 = new Pasta("Importante", "Arquivos Importantes");
$item3->setCategoria("Documentação");

$gavetaArma = new Gaveta();
$gavetaVazia = new Gaveta();
$gavetaTeste = new Gaveta();
$gavetaArma->adicionarItem($item1);
$gavetaArma->adicionarItem($item2);
$gavetaArma->adicionarItem($item3);
echo (print_r($gavetaArma->listarItens()) . "<br><br>");

$gavetaArma->removerItem("Glock .36");
echo (print_r($gavetaArma->listarItens()) . "<br><br>");

$armarioArma = new Armario();
$armarioVazio = new Armario();
$armarioTeste = new Armario();
$armarioArma->adicionarGaveta($gavetaArma);
$armarioArma->adicionarGaveta($gavetaVazia);
$armarioTeste->adicionarGaveta($gavetaTeste);
echo (print_r($armarioArma->listarGavetas()) . "<br><br>");

$armarioArma->removerGaveta(1);
echo (print_r($armarioArma->listarGavetas()) . "<br><br>");

$escritorioArma = new Escritorio();
$escritorioArma->adicionarArmario($armarioArma);
$escritorioArma->adicionarArmario($armarioVazio);
$escritorioArma->adicionarArmario($armarioTeste);
echo (print_r($escritorioArma->listarArmarios()) . "<br><br>");


$escritorioArma->removerArmario(1);
echo (print_r($escritorioArma->listarArmarios()) . "<br><br>");

echo (print_r($escritorioArma->auditoria()) . "<br><br>");