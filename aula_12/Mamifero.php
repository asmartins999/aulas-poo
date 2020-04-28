<?php
require_once 'Animal.php';

class Mamifero extends Animal{
	private $comPelo;

	//sobrepondo a animal
	public function locomover(){
		echo "CORRENDO<br>";
	}

	//sobrepondo a animal
	public function alimentar(){
		echo "MAMANDO<br>";
	}

	//sobrepondo a animal
	public function emitirSom(){
		echo "SOM DE MAMIFERO<br>";
	}

	public function getComPelo(){
		return $this->comPelo;
	}

	public function setComPelo($comPelo){
		$this->comPelo = $comPelo;
	}
}
?>
