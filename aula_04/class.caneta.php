<?php
class Caneta {

	private $modelo;
	private $ponta;
	private $tampada;
	private $cor;

	public function __construct($m,$c,$p){
		$this->modelo = $m;
		$this->cor = $c;
		$this->ponta = $p;
		$this->tampar();
	}

	private function tampar(){
		$this->tampada = true;
	}

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($m){
		$this->modelo = $m;
	}

	public function getPonta(){
		return $this->ponta;
	}

	public function setPonta($p){
		$this->ponta = $p;
	}

	public function getCor(){
		return $this->cor;
	}

	public function setCor($c){
		$this->cor = $c;
	}
}
?>