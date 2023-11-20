<?php
class CintaVideo extends Soporte{
  // Declaración de la propiedad
  private $duracion;

  // Declaración del constructor
  public function __construct($titulo , $numero, $precio, $duracion){
    parent::__construct($titulo, $numero, $precio);
    $this->duracion = $duracion;
  }

  // Declaración de método (se sobreescribe)
  function muestraResumen(){
    echo ("<br>Película en VHS:");
    parent::muestraResumen();
    echo ("Duración: ".$this->duracion." <br>");
  }
}

?>