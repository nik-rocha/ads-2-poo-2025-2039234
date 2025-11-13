<?php

require_once "Item.php";

class Gaveta
{
    private array $itens = [];

    public function setItens(array $itens) {
        $this->itens = $itens;
    }

    public function getItens(): array {
        return $this->itens;
    }

    public function adicionarItem(Item $item) {
        if(empty($item)) {
            return "Nenhum item adicionado!";
        }

        $this->itens[] = $item;
    }

    public function removerItem(string $nome): void
    {
        foreach($this->itens as $k => $i) {
            if($i->getNome() == $nome) {
                array_splice($this->itens, $k, 1);
            }
        }
    }
    
    public function listarItens(): array
    {
        return $this->itens;
    }
}