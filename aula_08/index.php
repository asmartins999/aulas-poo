<?php
require_once 'class.lutador.php';
require_once 'class.luta.php';

$l = array();

$l[0] = new Lutador("PrettyBoy","Francês",31,1.75,68.9,11,3,1);
$l[1] = new Lutador("PutScript","Brasileiro",29,1.68,57.8,14,2,3);
$l[2] = new Lutador("SnapShadown", "Americano", 35, 1.65, 80.9, 12, 2, 1);
$l[3] = new Lutador("DeadCode","Australiano",28,1.93,81.6,13,0,2);
$l[4] = new Lutador("UfoCobol","Brasileiro",37,1.70,119.3,5,4,3);
$l[5] = new Lutador("Nerdaart","Americano",30,1.81,105.7,12,2,4);

$uec01 = new Luta();
$uec01->marcarLuta($l[0],$l[1]);
$uec01->lutar();

$l[0]->status();
$l[1]->status();

?>