<?php
require_once 'Mamifero.php';

class Cachorro extends Mamifero{

	public function enterrarOsso(){
		echo "ENTERRANDO OSSO<br>";
	}

	public function abanarRabo(){
		echo "ABANDANDO O RABO<br>";
	}

	public function emitirSom(){
		echo "LATINDO<br>";
	}
}
?>
