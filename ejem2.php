<?php
class Ciudad
{
    public $nombre;
    public $abreviatura;
    public $numeroHabitantes;
    public function __construct($nombre, $abreviatura, $numeroHabitantes)
    {
        $this->nombre = $nombre;
        $this->abreviatura = $abreviatura;
        $this->numeroHabitantes = $numeroHabitantes;
    }
}
$ciudad1 = new Ciudad("Medellin", "MDE", 3000);
/*
$ciudad1->nombre = "Medellín";
$ciudad1->abreviatura = "MDE";
$ciudad1->numeroHabitantes = 3000000;
*/
echo "La ciudad: " . $ciudad1->nombre . " y la abreviatura es: " . $ciudad1->abreviatura . "<br>la cantidad de habitantes es: " . $ciudad1->numeroHabitantes;

