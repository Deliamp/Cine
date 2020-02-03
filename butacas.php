<?php

Class Butacas{
    
    /**
     * Propiedades
     * @var Char $_letra
     * @var Int $_fila Integer
     * @var Espectador $_espectador 
     */

    private $_fila;
    private $_letra;
    private $_espectador;

    //Constructor

    public function __construct($fila,$letra){
        $this->_fila = $fila;
        $this->_letra = $letra;
        $this->_espectador = null; //Al iniciar el asiento no hay nadie sentado
    }

    //Setters y getters

    public function setfila($fila){
        $this->_fila = $fila;
    }

    public function getfila(){
        return $this->_fila;
    }

    public function setletra($letra){
        $this->_letra = $letra;
    }

    public function geletra(){
        return $this->_letra;
    }

    public function setespectador(Espectador $espectador){
        $this->_espectador = $espectador;
    }

    public function getespectador(){
        return $this->_espectador;
    }

    //Otros metodos

    public function ocupado(){
        return !is_null($this->espectador);
    }

    public function getInfo(){
        
    }

 }

?>