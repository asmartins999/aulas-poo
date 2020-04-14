<?php
require_once 'pessoa.php';

class Funcionario extends Pessoa {
	private $setor;
	private $trabalhando;

	public function mudarTrabalho(){
		$this->trabalhando = !$this->trabalhando;
	}

	public function getSetor(){
		return $this->setor;
	}

	public function getTrabalhando(){
		return $this->trabalhando;
	}

	public function setSetor($s){
		$this->setor = $s;
	}

	public function setTrabalhando($t){
		$this->trabalhando = $t;
	}	
}
?>