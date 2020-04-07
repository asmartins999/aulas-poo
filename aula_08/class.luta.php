<?php
//require 'class.lutador.php';

Class Luta{

	private $desafiado;
	private $desafiante;
	private $rounds;
	private $aprovada;

	public function marcarLuta($l1,$l2){
		if ($l1->getCategoria() === $l2->getCategoria() 
			&& ($l1 != $l2)) {
			$this->aprovada = true;
			$this->desafiado = $l1;
			$this->desafiante = $l2;	
		} else {
			$this->aprovada = false;
			$this->desafiado = null;
			$this->desafiante = null;
			}
	}

	public function lutar(){
		if ($this->aprovada) {
			$this->desafiado->apresentar();
			$this->desafiante->apresentar();
			$vencedor = rand(0,2);

			switch ($vencedor) {
			 	case 0:
			 		echo "Empatou!!!";
			 		$this->desafiado->empatarLuta();
			 		$this->desafiante->empatarLuta();
			 		break;
			 	case 1:
			 		echo $this->desafiado->getNome()." venceu!!!";
			 		$this->desafiado->ganharLuta();
			 		$this->desafiante->perderLuta();
			 	break;
			 	
			 	case 2:
			 		echo $this->desafiante->getNome()." venceu!!!";
			 		$this->desafiado->perderLuta();
			 		$this->desafiante->ganharLuta();
			 		break;
			 } 
		} else {
			echo "Luta não aprovada!!!";
		}
	}

	public function setDesafiado($desafiado){
		$this->desafiado = $desafiado;
	}

	public function getDesafiado(){
		return $this->desafiado;
	}

	public function setDesafiante($desafiante){
		$this->desafiante = $desafiante;
	}

	public function getDesafiante(){
		return $this->desafiante;
	}

	public function setRounds($rounds){
		$this->rounds = $rounds;
	}

	public function getRounds(){
		return $this->rounds;
	}

	public function setAprovada($aprovada){
		$this->aprovada = $aprovada;
	}

	public function getAprovada(){
		return $this->aprovada;
	}


}
?>