<?php
require_once 'class.lutador.php';

$l = array();

$l[0] = new Lutador("Pretty Boy", "Francês", 31, 1.75, 68.9, 11, 2, 1);
$l[1] = new Lutador("PutScript","Brasileiro",29,1.68,57.8,14,2,3);
$l[2] = new Lutador("Pretty Boy", "Francês", 31, 1.75, 68.9, 11, 2, 1);
$l[3] = new Lutador("PutScript","Brasileiro",29,1.68,57.8,14,2,3);
$l[4] = new Lutador("Pretty Boy", "Francês", 31, 1.75, 68.9, 11, 2, 1);
$l[5] = new Lutador("PutScript","Brasileiro",29,1.68,57.8,14,2,3);

$l[0]->apresentar();
$l[1]->apresentar();

echo "<pre>";
print_r($l);






?>