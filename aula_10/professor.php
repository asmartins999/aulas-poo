<?php
require_once 'pessoa.php';

class Professor extends Pessoa {
	private $especialidade;
	private $salario;

	public function receberAume($ra){
		$this->setSalario($this->getsalario() + $ra);
	}

	public function getEspecial(){
		return $this->especialidade;
	}

	public function getSalario(){
		return $this->salario;
	}

	public function setEspecial($e){
		$this->especialidade = $e;
	}

	public function setSalario($s){
		$this->salario = $s;
	}
}
?>
