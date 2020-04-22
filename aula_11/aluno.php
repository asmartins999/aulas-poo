<?php
require_once 'pessoa.php';

class Aluno extends Pessoa{
	private $matricula;
	private $curso;

	// ao usar a palavra final antes da function ou class, nao permitirar essa funcao ser sobreposta por outra funcao em classe folha
	public function pagarMensal(){
		echo "Pagando mensalidade do aluno ".$this->getNome()."<br>";
	}

	public function getMatricula(){
		return $this->matricula;
	}

	public function getCurso(){
		return $this->curso;
	}

	public function setMatricula($matricula){
		$this->matricula = $matricula;
	}

	public function setCurso($curso){
		$this->curso = $curso;
	}
}
?>
