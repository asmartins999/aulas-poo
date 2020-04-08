<?php
require_once 'pessoa.php';
require_once 'publicacao.php';

class Livro implements publicacao{
	//Atributos
	private $titulo;
	private $autor;
	private $totPaginas;
	private $pagAtual;
	private $aberto;
	private $leitor;

	public function __construct($t,$au,$tp,$l){
		$this->titulo = $t;
		$this->autor = $au;
		$this->totPaginas = $tp;
		$this->leitor = $l;
		$this->aberto = false;
		$this->pagAtual = 0;
	}

	//Funcoes Especiais
	public function detalhes(){
		echo "<hr>";
		echo "Detalhes do livro ";
		echo $this->titulo. " escrito por ".$this->autor.".";
		echo "<br>Total de Paginas: ".$this->totPaginas;
		echo "<br>Pagina atual: ".$this->pagAtual;
		echo "<br>Sendo lido por ".$this->leitor->getNome();
	}

	//Getters
	public function getTitulo(){
		return $this->titulo;
	}

	public function getAutor(){
		return $this->autor;
	}

	public function getTotPaginas(){
		return $this->totPaginas;
	}

	public function getPagAtual(){
		return $this->pagAtual;
	}

	public function getAberto(){
		return $this->aberto;
	}

	public function getLeitor(){
		return $this->leitor;
	}

	//Setters
	public function setTitulo($t){
		$this->titulo = $t;
	}

	public function setAutor($au){
		$this->autor = $au;
	}

	public function setTotPaginas($tp){
		$this->totPaginas = $tp;
	}

	public function setPagAtual($pa){
		$this->pagAtual = $pa;
	}

	public function setAberto($ab){
		$this->aberto = $ab;
	}

	public function setLeitor($l){
		$this->leitor = $l;
	}

	// Metodos da Interface
	public function abrir(){
		$this->aberto = true;
	}

	public function fechar(){
		$this->aberto = false;
	}

	public function folhear($p){
		if ($p > $this->totPaginas) {
			$this->pagAtual = 0;
		} else {
			$this->pagAtual = $p;
		}
	}

	public function avancarPag(){
		$this->pagAtual ++;
	}

	public function voltarPag(){
		$this->pagAtual --;	
	}

}
?>