<?php

require_once "butacas.php";

Class Cine{
    
    //Propiedades

    private $_butacas;
    private $_fila;
    private $_columnas;
    private $_precio;
    private $_pelicula;

    //Constructor

    public function __construct($fila,$columnas,$precio,Pelicula $pelicula){
        $this->_fila = $fila;
        $this->_columnas = $columnas;
        $this->_precio = $precio;
        $this->_pelicula = $pelicula;
        $this->llenarArrayConButacas();
        //$this->_rellanarButacas();
    }

    //Setters y getters

    public function setbutacas($_butacas){
        $this->_butacas = $_butacas;
    }

    public function getbutacas(){
        return $this->_butacas;
    }
    
    public function setfila($fila){
        $this->_fila = $fila;
    }

    public function getfila(){
        return $this->_fila;
    }

    public function setcolumnas($columnas){
        $this->_columnas = $columnas;
    }

    public function gecolumnas(){
        return $this->_columnas;
    }

    public function setprecio($_precio){
        $this->_precio = $_precio;
    }

    public function getprecio(){
        return $this->_precio;
    }

    public function setpelicula(Pelicula $pelicula){
        $this->_pelicula = $pelicula;
    }

    public function getpelicula(){
        return $this->_pelicula;
    }

    //Otros metodos

    public function llenarArrayConButacas(){
        for($i = 0;$i < $this->_fila;$i++){
            for($j = 0;$j < $this->_columnas;$j++){
                $this->_butacas[$i][$j] = new Butacas($i+1,$j+1);
            }
        }
    }

    public function haySitio(){

    }

    public function haySitioButaca(){

    }

    public function sePuedeSentar(){

    }

    public function getInfo(){
        
    }

 }

?>