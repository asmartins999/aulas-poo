<?php
class Aluno{
	private $matricula;
	private $curso;

	public function cancelarMatricula(){
		
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