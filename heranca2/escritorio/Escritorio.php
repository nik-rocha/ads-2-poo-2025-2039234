<?php

require_once "Armario.php";

class Escritorio
{
    private array $armarios = [];

    public function setArmarios(array $armarios) {
        $this->armarios = $armarios;
    }

    public function getArmarios(): array
    {
        return $this->armarios;
    }

    public function adicionarArmario(Armario $armario) {
        if(empty($armario)) {
            return "Nenhum armário adicionado";
        }

        $this->armarios[] = $armario;
    }

    public function removerArmario(int $indice): void
    {
        array_splice($this->armarios, $indice, 1);
    }

    public function listarArmarios(): array
    {
        return $this->armarios;
    }

    public function auditoria()
    {
        foreach($this->armarios as $k => $a) {
            echo "<br>Armário ".$k + 1 .":<br>";
            foreach($a->getGavetas() as $k => $g) {
                echo "----> Gaveta ".$k + 1 .":<br>";
                foreach($g->getItens() as $k => $i) {
                    echo "-------> Item ".$k + 1 .", Nome: ".$i->getNome().".<br>";
                }
            }
        }
    }
}