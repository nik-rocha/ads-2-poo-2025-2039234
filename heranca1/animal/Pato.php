<?php

require_once "Animal.php";

class Pato extends Animal
{
    public function fazBarulho(): string {
        return "Quack";
    }
}