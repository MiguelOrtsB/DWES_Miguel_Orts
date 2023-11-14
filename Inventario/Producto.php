<?php 

class Producto{
  // Declaración de propiedades
  public $stock;
  public $nombre; 
  public $precio;

  // Declaración constructor
  function __construct($stock, $nombre, $precio){
    $this->stock = $stock;
    $this->nombre = $nombre;
    $this->precio = $precio;
  }
  
  // Declaración de método
  function mostrarInfo(){
    return ("Stock: ".$this->stock. "<br> Nombre: ".$this->nombre."<br> Precio: ".$this->precio." <br><br>");
  }
}

?>