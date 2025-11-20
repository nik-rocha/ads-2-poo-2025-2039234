<?php

class Pai {
    public function teste(): string {
        return "Pai::teste";
    }
}

class Filho extends Pai {
    public function teste(): string {
        $base = parent::teste();
        return $base . "Filho::teste";
    }

    public function chamarComThis(): string {
        return $this->teste();
    }

    public function chamarComParent(): string {
        return parent::teste();
    }
}

$teste = new Filho();
echo $teste->chamarComThis();
echo "<br>";
echo $teste->chamarComParent();