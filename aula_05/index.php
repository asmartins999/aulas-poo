<?php
require_once 'contaBanco.php';

$p1 = new ContaBanco();
$p2 = new ContaBanco();

$p1->abrirConta("CC");
$p1->setNumConta(1111);
$p1->setDono("Jubileu");
$p1->depositar(300);
$p1->pagarMensal();
$p1->sacar(338);
$p1->fecharConta();

echo "<pre>";
print_r($p1);
echo "<hr>";

$p2->abrirConta("CP");
$p2->setNumConta(2222);
$p2->setDono("Creuza");
$p2->depositar(500);
$p2->sacar(100);
$p2->pagarMensal();
$p2->sacar(535);
$p2->fecharConta();



echo "<pre>";
print_r($p2);

?>