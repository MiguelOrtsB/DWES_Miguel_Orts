<?php 

class Inventario{
  // Declaración de propiedades
  public $productos = array();

  // Declaración constructor
  function __construct($productos){
    $this->productos = $productos;
  }
  
  // Método para añadir los Estudiantes al array 
  function anadirProductos($producto){
    array_push($this->productos, $producto);
  }

  // Método para recorrer el array de Estudiantes y mostrar la información en una tabla HTML
  function mostrarProductos(){
    echo ("<h3><b>Productos del inventario: </b></h3>");
    for($i = 0; $i < count($this->productos); $i++){
      echo $this->productos[$i]->mostrarInfo(); // Llamamos al método "mostrarInfo()" de la Clase Producto
    }
  }

  // Método para calcular el precio total de todos los productos del Inventario
  function calcularPrecioTotal(){
    $suma = 0; 
    foreach($this->productos as $key){
      $float = floatval($key->precio);
      $suma += $float;
    }
    echo "- La suma del precio de todos los productos es de ".$suma." €<br><br>";
  }

  // Método para calcular los productos que tienen un stock bajo
  function stockBajo(){
    echo "- Productos con stock bajo: <br>";
    foreach($this->productos as $key){
      $stock = floatval($key->stock);
      if($stock < 3){
        echo "".$key->nombre." <br>";
      }
    }
  }
}

?>