<?php
// Add o arquivos class.carro.php que contem a classe carro
require_once 'class.carro.php';

// Instanciando um novo objeto da classe carro em $c
$c = new Carro();

//Adicionado valores a atributos do objeto na classe carro em $c
$c->modelo = "celta";
$c->ano = 2007;
$c->cor = "prata";
$c->ligar = true;

echo "<hr>";

//Usando metodo (função) da classe carro
$c->desligar();

echo "<hr>";
echo "<pre/>";
print_r($c);
?>