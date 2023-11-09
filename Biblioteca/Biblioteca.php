<?php 

class Biblioteca{
  // Declaración de propiedades
  public $nombre;
  public $listaLibros = array();

  // Declaración constructor
  function __construct($nombre, $listaLibros){
    $this->nombre = $nombre;
    $this->listaLibros = $listaLibros;
  }
  
  function anadirLibros($libro){
    /* $this->listaLibros = */ array_push($this->listaLibros, $libro);
  }

  function mostrarLibros(){
    for($i = 0; $i < count($this->listaLibros); $i++){
      echo var_dump($this->listaLibros[$i]);
    }
  }
}

?>