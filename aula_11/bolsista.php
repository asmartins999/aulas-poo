<?php
require_once 'aluno.php';

class Bolsista extends Aluno{
	private $bolsa;

	public function renovarBolsa(){
		echo "Bolsa Renovada! <br>";
	}

	public function pagarMensal(){
		echo "pagar mensal do bolsista<br>";
	}

	public function getBolsa(){
		return $this->bolsa;
	}

	public function setBolsa($bolsa){
		$this->bolsa = $bolsa;
	}
}
?>
