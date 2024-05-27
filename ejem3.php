<?php

class Colegio{
    public $nombre;
    private $director;
    private $ciudad;
    
     //constructor
     public function __construct($nombre,$director,$ciudad) {
        $this->nombre = $nombre;
        $this->director = $director;
        $this->ciudad = $ciudad;
        $this->getMostrar();
     }

     function getMostrar(){
        echo "Colegio: $this->nombre <br>Director: $this->director <br>Ciudad: $this->ciudad";
    }
}

//instancia Colegio
$colegio1 = new Colegio("I.E San Jose Est","Mauricio","Medellin");