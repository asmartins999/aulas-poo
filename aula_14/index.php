<?php

require_once 'Video.php';
require_once 'Gafanhoto.php';

$v[0] = new Video("Aula 01 de POO");
$v[1] = new Video("Aula 12 de PHP");
$v[2] = new Video("Aula 15 de HTML5");

$v[0]->play();
$v[0]->like();

$g[0] = new Gafanhoto("Jubileu",22,"F","juba");
$g[1]  =new Gafanhoto("Creuza",12,"F","creuzita");
var_dump($v);
echo "<hr>";
var_dump($g);