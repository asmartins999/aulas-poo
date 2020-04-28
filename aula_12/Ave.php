<?php
require_once 'Animal.php';

class Ave extends Animal{
	private $comPena;

	public function locomover(){
		echo "VOANDO<br>";
	}

	public function alimentar(){
		echo "COMENDO FRUTAS<br>";
	}

	public function emitirSom(){
		echo "SOM DE AVES<br>";
	}

	public function fazerNinho(){
		echo "CONTRUINDO NINHO<br>";
	}

	public function getComPena(){
		return $this->comPena;
	}

	public function setComPena($comPena){
		$this->comPena = $comPena;
	}
}
?>
