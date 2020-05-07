<?php
require_once 'Animal.php';

class Mamifero extends Animal {
    protected $corPelo;

    public function emitirSom()
    {
        echo "SOM DE MAMIFERO<br>";
    }
}