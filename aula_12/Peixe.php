<?php
require_once 'Animal.php';

class Peixe extends Animal{
	private $corEscama;

	public function locomover(){
		echo "NADANDO<br>";
	}

	public function alimentar(){
		echo "COMENDO COISAS NA AGUA<br>";
	}

	public function emitirSom(){
		echo "PEIXE NAO TEM SOM<br>";
	}

	public function soltarBolha(){
		echo "SOLTANDO BOLHAS<br>";
	}

	public function getCorEscama(){
		return $this->corEscama;
	}

	public function setCorEscama($corEscama){
		$this->corEscama = $corEscama;
	}
}
?>
