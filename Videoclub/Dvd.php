<?php
class Dvd extends Soporte{
  // Declaración de las propiedades
  public $idiomas;
  private $formatoPantalla;
  
  // Declaración del constructor
  public function __construct($titulo , $numero, $precio, $idiomas, $formatoPantalla){
    parent::__construct($titulo, $numero, $precio);
    $this->idiomas = $idiomas;
    $this->formatoPantalla = $formatoPantalla;
  }

  // Declaración de método (se sobreescribe)
  function muestraResumen(){
    echo ("<br>Película en DVD:");
    parent::muestraResumen();
    echo ("Idiomas: ".$this->idiomas." <br> Formato pantalla: ".$this->formatoPantalla." <br>");
  }
}

?>