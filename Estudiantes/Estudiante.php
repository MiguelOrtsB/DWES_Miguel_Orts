<?php 

class Estudiante{
  // Declaración de propiedades
  public $nombre;
  public $apellido; 
  public $edad;
  public $nota;

  // Declaración constructor
  function __construct($nombre, $apellido, $edad, $nota){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->edad = $edad;
    $this->nota = $nota;
  }

  // Declaración de método
  function mostrarInfo(){
    return ("Nombre: ".$this->nombre. "<br> Apellido: ".$this->apellido."<br> Edad: ".$this->edad." <br> Nota: ".$this->nota." <br><br>");
  }
}

?>