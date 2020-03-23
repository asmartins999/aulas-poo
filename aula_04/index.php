<?php
require 'class.caneta.php';

$c = new Caneta("BIC","PRETA",0.7);
$c2 = new Caneta("FABER","AZUL",0.5);

print "Caneta 1 é uma caneta modelo {$c->getModelo()} de ponta {$c->getPonta()} ";

echo "<pre>";
print_r($c);
echo "<hr>";
print "Caneta 2 é uma caneta modelo {$c2->getModelo()} de ponta {$c2->getPonta()} <br><br>";
print_r($c2);
?>