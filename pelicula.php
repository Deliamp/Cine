<?php

Class Pelicula{
    
    //Propiedades

    private $_titulo;
    private $_duracion;
    private $_edadMinima;
    private $_director;

    //Constructor

    public function __construct($titulo,$duracion,$edadMinima,$director){
        $this->_titulo = $titulo;
        $this->_duracion = $duracion;
        $this->_edadMinima = $edadMinima;
        $this->_director = $director;
    }

    //Setters y getters

    public function settitulo($titulo){
        $this->_titulo = $titulo;
    }

    public function gettitulo(){
        return $this->_titulo;
    }

    public function setduracion($duracion){
        $this->_duracion = $duracion;
    }

    public function geduracion(){
        return $this->_duracion;
    }

    public function setedadMinima($edadMinima){
        $this->_edadMinima = $edadMinima;
    }

    public function getedadMinima(){
        return $this->_edadMinima;
    }

    public function setdirector($director){
        $this->_director = $director;
    }

    public function getdirector(){
        return $this->_director;
    }

    //Otros metodos

    public function getInfo(){
        //Imprime info de la peli
        $info = "{$this->_titulo}<br>".
                "{$this->_duracion}<br>".
                "{$this->_edadMinima}<br>".
                "{$this->_director}<br>";
        return $info;
        
    }

 }

?>