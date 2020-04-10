<?php
require_once 'pessoa.php';
require_once 'aluno.php';
require_once 'professor.php';
require_once 'funcionario.php';

$p1 = new Pessoa();
$p2 = new Aluno();
$p3 = new Professor();
$p4 = new Funcionario();

echo "<pre>";
print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);

?>