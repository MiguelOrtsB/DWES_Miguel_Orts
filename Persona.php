<?php 

class Persona{
  // Declaración de propiedades
  private $nombre;
  private $edad; 

  // Declaración constructor
  function __construct($nombre, $edad){
    $this->nombre = $nombre;
    $this->edad = $edad;
  }
  
  // Declaración de método
  public function mostrarInfo(){
    return ("Nombre: ".$this->nombre. "<br> Edad: ".$this->edad."<br>");
  }
}

// Instanciamiento de objetos clase Persona
$p1 = new Persona("Tomeu", 18);
$p2 = new Persona("Antonio", 28);

echo $p1->mostrarInfo();
echo $p2->mostrarInfo();

?>