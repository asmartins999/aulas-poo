<?php


abstract class Pessoa{
    protected $nome, $idade, $sexo,$experiencia;

    /**
     * Pessoa constructor.
     * @param $nome
     * @param $idade
     * @param $sexo
     */
    public function __construct($nome, $idade, $sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }


    protected function ganharExperiencia($n){
        $this->experiencia += $n;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     * @return Pessoa
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     * @return Pessoa
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     * @return Pessoa
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
        return $this;
    }

    /**
     * @return int
     */
    public function getExperiencia()
    {
        return $this->experiencia;
    }

    /**
     * @param int $experiencia
     * @return Pessoa
     */
    public function setExperiencia($experiencia)
    {
        $this->experiencia = $experiencia;
        return $this;
    }


}