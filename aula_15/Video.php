<?php
require_once 'AcoesVideos.php';

class Video implements AcoesVideos {
    private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;

    /**
     * Video constructor.
     * @param $titulo
     */
    public function __construct($titulo){
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }


    public function play(){
        $this->reproduzindo = true;
    }

    public function pause(){
        $this->reproduzindo = false;
    }

    public function like(){
        $this->curtidas ++;
    }

    /**
     * @return mixed
     */
    public function getTitulo(){
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     * @return Video
     */
    public function setTitulo($titulo){
        $this->titulo = $titulo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAvaliacao(){
        return $this->avaliacao;
    }

    /**
     * @param mixed $avaliacao
     * @return Video
     */
    public function setAvaliacao($avaliacao){
        $media = ($this->avaliacao + $avaliacao) / $this->views;
        $this->avaliacao = $media;
    }

    /**
     * @return mixed
     */
    public function getViews(){
        return $this->views;
    }

    /**
     * @param mixed $views
     * @return Video
     */
    public function setViews($views){
        $this->views = $views;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurtidas(){
        return $this->curtidas;
    }

    /**
     * @param mixed $curtidas
     * @return Video
     */
    public function setCurtidas($curtidas){
        $this->curtidas = $curtidas;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReproduzindo(){
        return $this->reproduzindo;
    }

    /**
     * @param mixed $reproduzindo
     * @return Video
     */
    public function setReproduzindo($reproduzindo){
        $this->reproduzindo = $reproduzindo;
        return $this;
    }
}