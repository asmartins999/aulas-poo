<?php
require_once 'pessoa.php';

class Aluno extends Pessoa {
	private $matricula;
	private $curso;

	public function cancelarMatricula(){
		$this->matricula = false;
	}

	public function getMatricula(){
		return $this->matricula;
	}

	Public function getCurso(){
		return $this->curso;
	}

	public function setMatricula($m){
		$this->matricula = $m;
	}

	Public function setCurso($c){
		$this->curso = $c;
	}


}
?>