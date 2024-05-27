<?php

class Colegio{
    public $nombre;
    private $director;
     public function setDirector($direc){
        $this -> director = $direc;
     }
    function getDirector(){
        return $this -> director;
     }
     public function __construct($nombre,$director) {
        $this->nombre = $nombre;
        $this->director = $director;
     }
}

//instancia Colegio

$colegio1 = new Colegio("I.E San Jose Est","Mauricio");
//$colegio1 -> nombre = "I.E San Jose Est";
//$colegio1 -> setDirector("Mauricio");
echo "Colegio: ";
echo $colegio1 -> nombre;
echo "<br>Director: ";
echo $colegio1 -> getDirector();