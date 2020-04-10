<?php
class ContaBanco{
	//Atributos
	public $numConta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;

	//Metodos
	public function abrirConta($t){
		$this->setTipoConta($t);
		$this->setStatus(true);
		if ($t == "CC") {
			$this->setSaldo(50.00);
		} elseif ($t == "CP") {
			$this->setSaldo(150.00);
		}
	}

	public function fecharConta(){
		if ($this->getSaldo() > 0) {
			echo "Erro! A conta possui saldo, não pode ser fechada!";
		} elseif ($this->getSaldo() < 0) {
			echo "Erro! A conta possui saldo NEGATIVO, não pode ser fechada";
		} else {
			$this->setStatus(false);
			echo "<p>Conta de {$this->getDono()} fechada com SUCESSO!<p/>";
		}
	}

	public function depositar($v){
		if ($this->getStatus()) {
			$this->setSaldo($this->getSaldo() + $v);
			echo "<p>Deposito de R$$v realizado na conta de {$this->getDono()}<p/>";
		} else {
			echo "<p>Conta Fechada, não foi possível depositar!<p/>";
		}
	}

	public function sacar($v){
		if ($this->getStatus() == true) {
			if ($this->getSaldo() >= $v) {
				$this->setSaldo($this->getSaldo() - $v);
				echo "<p>Saque de R$$v autorizado na conta de {$this->getDono()}<p/>";
			} else {
				echo "<p>Saldo insuficiente para saque !!!<p/>";
			}
		} else {
			echo "<p>Conta fechada, não foi possível efetuar o saque.<p/>";
		}
	}

	public function pagarMensal(){
		if ($this->getTipoConta() == "CC") {
			$v = 12;
		} elseif ($this->getTipoConta() == "CP") {
			$v = 20;
		}
		if ($this->getStatus()) {
			$this->setSaldo($this->getSaldo() - $v);
			echo "Mensalidade de R$$v debitada da conta de {$this->getDono()}";
		} else {
			echo "<p>Problemas com a conta, pagamento nao realizado.<p/>";
		}
	}

	//Metodos Especiais
	public function __construct(){
		$this->setSaldo(0);
		$this->setStatus(false);
		echo "<p>Conta criada com sucesso!<p/>";
	}

	public function getNumConta(){
		return $this->numConta;
	}

	public function setNumConta($n){
		$this->numConta = $n;
	}

	public function getDono(){
		return $this->dono;
	}

	public function setDono($d){
		$this->dono = $d;
	}

	public function getTipoConta(){
		return $this->tipoConta;
	}

	public function setTipoConta($t){
		$this->tipoConta = $t;
	}

	public function getSaldo(){
		return $this->saldo;
	}

	public function setSaldo($s){
		$this->saldo = $s;
	}

	public function getStatus(){
		return $this->status;
	}

	public function setStatus($st){
		$this->status = $st;
	}
}
?>