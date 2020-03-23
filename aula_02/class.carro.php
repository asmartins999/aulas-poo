<?php
class Carro {
	
	var $modelo;
	var $ano;
	var $cor;

	function ligar(){
		if ($this->desligar == true) {
			echo "Ligando ....";
		} else {
			echo "O carro já está LIGADO";
		}
	}

	function desligar(){
		if ($this->ligar == true) {
			echo "Desligando ....";
		} else {
			echo "O carro já está DESLIGADO";
		}
	}

	function andar(){
		if ($this->ligar == true) {
			echo "Andando ....";		
	} else {
		echo "Carro está desligado!";
	}
}
}
?>