<?php
require_once 'pessoa.php';
require_once 'aluno.php';
require_once 'professor.php';
require_once 'funcionario.php';

$p1 = new Pessoa();
$p2 = new Aluno();
$p3 = new Professor();
$p4 = new Funcionario();

$p1->setNome("Pedro");
$p2->setNome("Maria");
$p3->setNome("Claudio");
$p4->setNome("Lucas");

$p2->setCurso("PHP");
$p3->setSalario(2500.75);
$p4->setSetor("Estoque");

$p3->receberAume(550.20);
$p4->mudarTrabalho();
$p2->cancelarMatricula();

echo "<pre>";
print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);

?>
