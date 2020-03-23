<?php
require 'class.caneta.php';
$c = new Caneta();
$c->modelo = "Bic Cristal";
$c->cor = "Azul";


$c->rabiscar();
$c->tampar();

echo "<pre/>";
print_r($c);

?>