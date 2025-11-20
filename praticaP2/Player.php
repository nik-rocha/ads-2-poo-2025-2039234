<?php

require_once "Inventario.php";
require_once "Item.php";

class Player
{
    protected string $nickname;
    protected int $nivel;
    protected Inventario $inventario;

    public function __construct(string $nickname)
    {
        $this->setNickname($nickname);
        $this->setNivel(1);
        $this->setInventario(new Inventario());
    }

    public function setNickname(string $nickname)
    {
        if(empty($nickname)) {
            return "<br> Atenção jogador! Seu nickname está vazio. <br>";
        }

        $this->nickname = $nickname;
    }

    public function getNickname(): string
    {
        return $this->nickname;
    }

    public function setNivel(int $nivel): void 
    {
        $this->nivel = $nivel;
    }

    public function getNivel(): int
    {
        return $this->nivel;
    }

    public function setInventario(Inventario $inventario) {
        $this->inventario = $inventario;
    }

    public function getInventario(): Inventario
    {
        return $this->inventario;
    }

    public function coletarItem(Item $item): string
    {
        if($this->inventario->getCounterCapacidade() + $item->getTamanho() > $this->inventario->getCapacidadeMaxima()) {
            return "<br>✖️ Inventário cheio. Não é possível adicionar! ✖️<br>";
        }

        $this->inventario->adicionar($item);
        return "<br>✨ {$this->getNickname()}: O item {$item->getNome()} está na sua mão e será adicionado ao seu inventário. ✨<br>";
    }

    public function soltarItem(Item $item): string
    {
        if($this->inventario->getCounterCapacidade() - $item->getTamanho() < 0) {
            return "<br>✖️ Seu inventário se encontra vazio! ✖️<br>";
        }

        $this->inventario->remover($item);
        return "<br>💨 {$this->getNickname()}: O item {$item->getNome()} foi jogado fora. 💨<br>";
    }

    public function subirNivel()
    {
        $this->setNivel($this->getNivel() + 1);
        $this->inventario->setCapacidadeMaxima($this->inventario->getCapacidadeMaxima() + $this->getNivel() * 3);

        return "<br> ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ <br>📈 {$this->getNickname()}: Você chegou no nível {$this->getNivel()}! Seu inventário aumentou em ".($this->getNivel() * 3)." espaços! 📈<br> ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ <br>";
    }
}