<?php

// add arquivo da interface
require_once 'Controlador.php';


/* a classe Controle Remoto está implentando a interface Controlador */
class ControleRemoto implements Controlador{
	
	// Atributos e Métodos da classe
	private $volume;
	private $ligado;
	private $tocando;

	public function __construct(){
		$this->volume = 50;
		$this->ligado = false;
		$this->tocando = false;
	}

	private function getVolume(){
		return $this->volume;
	}

	private function setVolume($v){
		$this->volume = $v;
	}

	private function getLigado(){
		return $this->ligado;
	}

	private function setLigado($l){
		$this->ligado = $l;
	}

	private function getTocando(){
		return $this->tocando;
	}
	private function setTocando($t){
		$this->tocando = $t;
	}

/*
	 Métodos que foram implementados a partir da interface "Controlador" */
	
	public function ligar(){
		$this->setLigado(true);
	}

	public function desligar(){
		$this->setLigado(false);
	}

	public function abrirMenu(){
		echo "<p>*** MENU ***<p/>";
		echo "<br> Está ligado?: ".($this->getLigado() ? "SIM" : "NÃO");
		echo "<br>Está tocando?: ".($this->getTocando() ? "SIM" : "NÃO");
		echo "<br>Volume: ". $this->getVolume();
		for ($i=0; $i <= $this->getVolume(); $i+=10) { 
			echo " | ";
		}
	}

	public function fecharMenu(){
		echo "Fechando o Menu...";
	}

	public function maisVolume(){
		if ($this->getLigado()) {
			$this->setVolume($this->getVolume() + 10);
		} else {
			echo "<br> Não está igado, ligue !!!";
		}
	}

	public function menosVolume(){
		if ($this->getLigado()) {
			$this->setLigado($this->getVolume() - 10);
		} else {
			echo "<br> Não está igado, ligue !!!";
		}
	}

	public function ligarMudo(){
		if ($this->getLigado() && $this->getVolume() > 0) {
			$this->setVolume(0);
		}
	}

	public function desligarMudo(){
		if ($this->getLigado() && $this->getVolume() == 0) {
			$this->setVolume(50);
		}
	}

	public function play(){
		if ($this->getLigado() && $this->getTocando()) {
			$this->setTocando(true);		}
	}

	public function pause(){
		if ($this->getLigado() && $this->getTocando()) {
			$this->setTocando(false);
		}
	}
}
?>