<?php

class Lutador{

	//Atributes
	private $nome;
	private $nacionalidade;
	private $idade;
	private $altura;
	private $peso;
	private $categoria;
	private $vitorias;
	private $derrotas;
	private $empates;

	//getter and setter
	public function getNome(){
		return $this->nome;
	}

	public function setNome($n){
		$this->nome = $n;
	}

	public function getNacional(){
		return $this->nacionalidade;
	}

	public function setNacional($nac){
		$this->nacionalidade = $nac;
	}

	public function getIdade(){
		return $this->idade;
	}

	public function setIdade($i){
		$this->idade = $i;
	}

	public function getAltura(){
		return $this->altura;
	}

	public function setAltura($a){
		$this->altura = $a;
	}

	public function getPeso(){
		return $this->peso;
	}

	public function setPeso($p){
		$this->peso = $p;
		$this->setCategoria($p);
	}

	public function getCategoria(){
		return $this->categoria;
	}

	private function setCategoria($c){
		if ($c < 52.2) {
			$this->categoria = "Categoria Inválida!";
		} else if ($c <= 70.3) {
			$this->categoria = "LEVE";
		} else if ($c <= 83.9) {
			$this->categoria = "MÉDIO";
		} elseif ($c <= 120.2) {
			$this->categoria = "PESADO";
		} else {
			$this->categoria = "Categoria Inválida";
		}
	}

	public function getVitorias(){
		return $this->vitorias;
	}
	public function setVitorias($v){
		$this->vitorias = $v;
	}

	public function getDerrotas(){
		return $this->derrotas;
	}

	public function setDerrotas($d){
		$this->derrotas = $d;
	}

	public function getEmpates(){
		return $this->empates;
	}

	public function setEmpates($e){
		$this->empates = $e;
	}

	// specials functions

	public function __construct($n, $nac, $i, $a, $p, $v, $d, $e){
		$this->setNome($n);
		$this->setNacional($nac);
		$this->setIdade($i);
		$this->setAltura($a);
		$this->setPeso($p);
		$this->setVitorias($v);
		$this->setDerrotas($d);
		$this->setEmpates($e);
	}
	public function apresentar(){
		print_r("<hr> Apresentando o lutador ....<br><br>");
		print_r("Neste corner, ele lutador ".$this->getNacional()."<br>");
		print_r("De ".$this->getIdade()."<br>");
		print_r("Medindo ".$this->getAltura()." m<br>");
		print_r("Pesando ".$this->getPeso()." Kg<br>");
		print_r("Categoria ".$this->getCategoria()."<br>");
		print_r("Detentor de ".$this->getVitorias()." vitória(s)! <br>");
		print_r("Com apenas ".$this->getDerrotas()." derrota(s)! <br>");
		print_r("E ".$this->getEmpates()." empate(s) <br>");
		print_r("Ele, ".$this->getNome()."<br>");
		print_r("<hr>");
	}

	public function status(){
		print_r("<hr> STATUS DO LUTADOR ...<br>");
		print_r("<br>Lutador: ".$this->getNome()."<br>");
		print_r("É um peso ".$this->getCategoria()."<br>");
		print_r("Vitórias ".$this->getVitorias()." <br>");
		print_r("Derrotas ".$this->getDerrotas()." <br>");
		print_r("Empates ".$this->getEmpates()." <br><hr>");
	}

	public function ganharLuta(){
		$this->setVitorias($this->getVitorias() + 1);
	}

	public function perderLuta(){
		$this->setVitorias($this->getVitorias() - 1);
	}

	public function empatarLuta(){
		$this->setEmpates($this->getEmpates() + 1);
	}
}

?>