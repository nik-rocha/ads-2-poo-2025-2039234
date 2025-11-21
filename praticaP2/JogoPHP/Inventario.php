<?php

require_once "Item.php";

class Inventario
{
    protected int $capacidadeMaxima;
    protected array $itens;
    protected int $counterCapacidade = 0;

    public function __construct()
    {
        $this->setCapacidadeMaxima(20);
        $this->setItens([]);
    }

    public function setCapacidadeMaxima(int $capacidadeMaxima): void 
    {
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function getCapacidadeMaxima(): int
    {
        return $this->capacidadeMaxima;
    }

    public function setItens(array $itens): void
    {
        $this->itens = $itens;
    }

    public function getItens(array $itens): array
    {
        return $this->itens;
    }

    public function getCounterCapacidade(): int
    {
        return $this->counterCapacidade;
    }

    public function adicionar(Item $item): string
    {
        if($this->counterCapacidade + $item->getTamanho() > $this->getCapacidadeMaxima()) {
            return false;
        }

        $this->counterCapacidade += $item->getTamanho();
        $this->itens[] = $item;

        return "<br> Item de {$item->getClasse()} {$item->getNome()} adicionado! <br>";
    }

    public function remover(Item $item)
    {
        if($this->counterCapacidade - $item->getTamanho() < 0) {
            return false;
        }

        foreach($this->itens as $i => $ni) {
            if($ni === $item) {
                $this->counterCapacidade -= $item->getTamanho();
                array_splice($this->itens, $i, 1);
                return "<br> Item de {$item->getClasse()} {$item->getNome()} removido. <br>";
            }
        }
    }

    public function capacidadeLivre(): string
    {
        $itensListados = [];
        $espacoLivre = $this->getCapacidadeMaxima() - $this->getCounterCapacidade();

        foreach($this->itens as $item) {
            $itensListados[] = $item->getNome();
        }

        if(!empty($itensListados)) {
            return "<br> ======================== <br> Seu inventário ✉: <br><br>"."> ".implode('<br> > ', $itensListados)."<br><br>Espaço livre: {$espacoLivre}/{$this->capacidadeMaxima} <br>
            Espaço usado: {$this->getCounterCapacidade()}/{$this->capacidadeMaxima}<br>======================== <br>";
        } else {
            return "<br> ======================== <br> Seu inventário ✉: <br><br>Inventário vazio.<br><br>Espaço livre: {$espacoLivre}/{$this->capacidadeMaxima} <br>
            Espaço usado: {$this->getCounterCapacidade()}/{$this->capacidadeMaxima}<br> ======================== <br>";
        }
    }
}