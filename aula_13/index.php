<?php
require_once 'Mamifero.php';
require_once 'Lobo.php';
require_once 'Cachorro.php';

$m = new Mamifero();
$l = new Lobo();
$c = new Cachorro();

$m->emitirSom();
$l->emitirSom();
$c->emitirSom();


$c->reagirFrase("Ola");          // Abanar e Latir
$c->reagirFrase("Vai Apanhar");  // Rosnar
$c->reagirHora(11, 45);         // Abanar
$c->reagirHora(21, 00);         // Ignorar
$c->reagirDono(true);           // Abanar
$c->reagirDono(false);          // Rosnar e Latir
$c->reagirPesoIdade(2, 12.5);        // Latir
$c->reagirPesoIdade(17, 4.5);        // Rosnar
