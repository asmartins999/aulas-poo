<?php
require_once 'Mamifero.php';

class Canguru extends Mamifero{

	public function usarBolsa(){
		echo "USANDO BOLSA!<br>";
	} 

	public function locomover(){
		echo "SALTANDO<br>";
	}
}
?>
