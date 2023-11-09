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
    echo ("Libros de la bibilioteca: <br><br>");
    for($i = 0; $i < count($this->listaLibros); $i++){
      echo $this->listaLibros[$i]->mostrarInfo(); // Llamamos al método "mostrarInfo()" de la Clase Libro
    }
  }

  function borrarLibros($libro){
    $indice = array_search($libro, $this->listaLibros); // Sacamos el índice del respectivo libro en la lista
    for($i = 0; $i < count($this->listaLibros); $i++){ // Hacemos bucle para recorrer la lista de libros
      if($this->listaLibros[$i] == $libro){ // Si coincide el índice de la lista con el libro pasado por parámetro se elimina
        array_splice($this->listaLibros, $indice);
      }
    }
  }

}

?>