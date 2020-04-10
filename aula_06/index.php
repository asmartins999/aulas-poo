<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Projeto Controle Remoto</h1>
	<pre>
<?php
require_once 'ControleRemoto.php';

$c = new ControleRemoto();

$c->ligar();
$c->maisVolume();
$c->abrirMenu();
?> 
	</pre>
</body>
</html>
