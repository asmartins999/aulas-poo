<?php
require_once 'Mamifero.php';
require_once 'Reptil.php';
require_once 'Peixe.php';
require_once 'Ave.php';
require_once 'Arara.php';
require_once 'Cachorro.php';
require_once 'Canguru.php';
require_once 'GoldFish.php';

echo "<pre>";

$m = new Mamifero();
$r = new Reptil();
$p = new Peixe();
$a = new Ave();
$m2 = new Mamifero();
$c = new Canguru();
$k = new Cachorro();

$m->setPeso(85.3);
$m->setIdade(2);
$m->setmembros(4);
$m->locomover();//correndo
$m->alimentar();//mamando
$m->emitirSom();//som de mamifero
print_r($m);
echo "<hr>";

$p->setPeso(0.35);
$p->setidade(1);
$p->setMembros(0);
$p->locomover();//nadando
$p->alimentar();//comendo coisas
$p->emitirSom();//peixe nao faz som
$p->soltarBolha();
print_r($p);
echo "<hr>";

$a->setPeso(0.89);
$a->setIdade(2);
$a->setMembros(2);
$a->locomover();//voando
$a->alimentar();//comendo frutas
$a->emitirSom();//som de ace
$a->fazerNinho();
print_r($a);
echo "<hr>";

$m2->setPeso(5.70);
$m2->setIdade(8);
$m2->setmembros(4);
$m2->locomover();//correndo
$m2->alimentar();//mamando
$m2->emitirSom();//som de mamifero
print_r($m2);
echo "<hr>";

$c->setPeso(85.3);
$c->setIdade(2);
$c->setmembros(4);
$c->locomover();//saltando
$c->alimentar();//mamando
$c->emitirSom();//som de mamifero
$c->usarBolsa();
print_r($c);
echo "<hr>";

$k->setPeso(85.3);
$k->setIdade(2);
$k->setmembros(4);
$k->locomover();//Correndo
$k->alimentar();//mamando
$k->emitirSom();//som de mamifero
$k->abanarRabo();
print_r($k);
echo "<hr>";

?>
