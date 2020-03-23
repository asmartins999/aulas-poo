<?php
require 'class.carro.php';
$c = new Carro();

$c->modelo = "celta";
$c->ano = 2007;
$c->cor = "prata";
$c->ligar = true;
//$c->ligar = true;
//echo "<pre/>";
//print_r($c);
echo "<hr>";
$c->desligar();

echo "<hr>";
echo "<pre/>";
print_r($c);
?>