<?php

require_once 'Video.php';
require_once 'Gafanhoto.php';
require_once 'Visualizacao.php';

$v[0] = new Video("Aula 01 de POO");
$v[1] = new Video("Aula 12 de PHP");
$v[2] = new Video("Aula 15 de HTML5");

$v[0]->play();
$v[0]->like();

$g[0] = new Gafanhoto("Jubileu",22,"F","juba");
$g[1]  =new Gafanhoto("Creuza",12,"F","creuzita");

$vis[0] = new Visualizacao($g[0], $v[2]); //Jubileu assistindo HTML5
$vis[1] = new Visualizacao($g[0], $v[1]); //Jubileu assistindo PHP

$vis[0]->avaliar();
$vis[1]->avaliarPorc(85);

var_dump($vis);
echo "<hr>";
var_dump($v);
echo "<hr>";
var_dump($g);