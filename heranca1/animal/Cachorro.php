<?php

require_once "Animal.php";

class Cachorro extends Animal
{
    public function fazBarulho(): string {
        return "Au au";
    }
}