<?php 

class Libro{
  // Declaración de propiedades
  public $titulo;
  public $autor; 
  public $año;

  // Declaración constructor
  function __construct($titulo, $autor, $año){
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->año = $año;
  }
  
  // Declaración de método
  function mostrarInfo(){
    return ("Título: ".$this->titulo. "<br> Autor: ".$this->autor."<br> Año: ".$this->año." <br><br>");
  }
}

?>