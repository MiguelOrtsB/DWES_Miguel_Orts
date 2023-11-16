<?php 

class Soporte{
  // Declaración de propiedades
  public $titulo;
  protected $numero;
  protected $precio; // Nota* si pusiera esta propiedad private no podría acceder a ella desde las clases hijas dando error
  private static $iva = 0.21; // Constante mediante una propiedad privada y estática

  // Declaración constructor
  function __construct($titulo, $numero, $precio){
    $this->titulo = $titulo;
    $this->numero = $numero;
    $this->precio = $precio;
  }

  // Getters 
  public function getPrecio(){
    return $this->precio;
  }

  public function getPrecioConIva(){
    $precioConIva = $this->precio + ($this->precio * self::$iva);
    return $precioConIva;
  }

  public function getNumero(){
    return $this->numero;
  }
  
  // Declaración de método para mostrar información del objeto
  function muestraResumen(){
    echo "<br>".$this->titulo. " <br>".$this->precio." € (IVA no incluido) <br>";
  }
}

?>