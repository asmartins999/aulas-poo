<?php
require_once 'Pessoa.php';

class Gafanhoto extends Pessoa{
    private $login, $totAssitido;

    /**
     * Gafanhoto constructor.
     * @param $login
     */
    public function __construct($nome, $idade, $sexo, $login){
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssitido = 0;
    }


    public function assitirMaisUm(){
        $this->totAssitido ++;
    }

    /**
     * @return mixed
     */
    public function getLogin(){
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login){
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getTotAssitido(){
        return $this->totAssitido;
    }

    /**
     * @param mixed $totAssitido
     */
    public function setTotAssitido($totAssitido){
        $this->totAssitido = $totAssitido;
    }


}