<?php
//require_once 'pessoa.php';
require_once 'visitante.php';
require_once 'aluno.php';
require_once 'bolsista.php';

echo "<pre>";

$v1 = new Visitante();
$v1->setNome("Juvenal");
$v1->setIdade(33);
$v1->setSexo("M");
print_r($v1);
echo "<hr>";

$a1 = new Aluno();
$a1->setNome("Pedro");
$a1->setMatricula(1111);
$a1->setIdade(16);
$a1->setSexo("M");
$a1->setCurso("Informática");
$a1->pagarMensal();
print_r($a1);
echo "<hr>";


$b1 = new Bolsista();
$b1->setMatricula(1112);
$b1->setNome("Jubileu");
$b1->setBolsa(12.5);
$b1->setCurso("Administração");
$b1->setIdade(17);
$b1->pagarMensal();
print_r($b1);
echo "<hr>";

?>
