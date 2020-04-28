<?php
require_once 'Animal.php';

class Reptil extends Animal{
	private $corEscama;

	public function locomover(){
		echo "RASTEJANDO<br>";
	}

	public function alimentar(){
		echo "COMENDO VEGETAIS<br>";
	}

	public function emitirSom(){
		echo "SOM DE REPTIL<br>";
	}

	public function getCorEscama(){
		return $this->corEscama;
	}

	public function setCorEscama($corEscama){
		$this->corEscama = $corEscama;
	}
}
?>
