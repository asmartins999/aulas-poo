<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao{
    private $espectador, $filme;

    /**
     * Visualizacao constructor.
     * @param $espectador
     * @param $filme
     */
    public function __construct($espectador, $filme)
    {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews  ($this->filme->getViews() + 1);
        $this->espectador->setTotAssitido($this->espectador->getTotAssitido() + 1);
    }

    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }

    public function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);
    }

    public function avaliarPorc($porc){
        $nova = 0;
        if ($porc <= 20){
            $nova = 3;
        } elseif ($porc <= 50){
            $nova = 5;
        } elseif ($porc <= 90){
            $nota = 8;
        } else {
            $nota = 10;
        }
        $this->filme->setAvaliacao($nota);
    }
    /**
     * @return mixed
     */
    public function getEspectador()
    {
        return $this->espectador;
    }

    /**
     * @param mixed $espectador
     */
    public function setEspectador($espectador)
    {
        $this->espectador = $espectador;
    }

    /**
     * @return mixed
     */
    public function getFilme()
    {
        return $this->filme;
    }

    /**
     * @param mixed $filme
     */
    public function setFilme($filme)
    {
        $this->filme = $filme;
    }


}