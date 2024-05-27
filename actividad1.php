<!-- ACTIVIDAD POO #1
1. crear una clase persona con los siguientes atributos privados: nombre, apellido y edad.
2. crear un constructor, get y set
3. crear las siguientes funciones:
     -mayorEdad: indica si el mayor o menor de edad.
    - nombreCompleto: devuelve el nombre y el apellido  -->
<?php
class Persona{
    private $nombre;
    private $apellido;
    private $edad;
    public function __construct($nombre,$apellido,$edad){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->edad=$edad;
    }

    function mayorEdad()
    {
        return $this->edad>=18;
    }
    function nombreCompleto(){
        return $this->nombre." ".$this->apellido;
    }
}

$persona1 = new Persona("Juan","Martinez",16);
    if($persona1->mayorEdad()){
        echo $persona1->nombreCompleto()." es mayor de edad <br>";
    } else
    {
        echo $persona1->nombreCompleto()." es menor de edad <br>";
    }
