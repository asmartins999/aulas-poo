<?php
require_once 'Lobo.php';

class Cachorro extends Lobo{

    public function emitirSom()
    {
        echo "SOM DE CACHORRO<br>";
    }

    public function reagirFrase($frase){
        if ($frase == "Ola"){
            echo "reagirFrase = Abanar e Latir <br>";
        } else {
            echo "reagirFrase = Rosnar<br>";
        }
    }

    public function reagirHora($hora, $min){
        if ($hora <12){
            echo "reagirHora = Abanar<br>";
        } elseif ($hora >= 18){
            echo "reagirHora = Ignorar<br>";
        } else {
            echo "reagirHora = Rosnar e Latir<br>";
        }
    }

    public function reagirDono($dono){
        if ($dono){
            echo "reagirDono = Abanar<br>";
        } else {
            echo "reagirDono = Rosnar e Latir<br>";
        }
    }

    public function reagirPesoIdade($idade, $peso){
        if ($idade < 5){
            if ($peso < 10){
                echo "reagirPesoIdade = Abanar<br>";
            } else {
                echo "reagirPesoIdade = Latir<br>";
            }
        } else {
            if ($peso < 10){
                echo "reagirPesoIdade = Rosnar<br>";
            } else {
                echo "reagirPesoIdade = Ignorar<br>";
            }
        }
    }

}