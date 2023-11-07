<?php

class Coche{
  // Declaración de propiedades
  private $marca;
  private $modelo;
  private $color;
  private $velocidad; 

  // Declaración constructor
  function __construct($marca, $modelo, $color, $velocidad){
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->color = $color;
    $this->velocidad = $velocidad;
  }
  
  // Declaración de métodos
  public function mostrarInfo(){
    return ("Marca: ".$this->marca. "<br> Modelo: ".$this->modelo."<br> Color: ".$this->color."<br> Velocidad: ".$this->velocidad." km/h <br><br>");
  }

  public function acelerarCoche($aumento){
    $this->velocidad += $aumento;
  }

  public function frenarCoche($disminuir){
    $this->velocidad -= $disminuir;
  }

  public function modificarVelocidad($velocidad){
    
    if($velocidad == 0){
      echo ("¡Error! La velocidad no puede ser 0 <br>");
    }else{
      $this->velocidad += $velocidad; // Aunque el parámetro sea negativo se restará, ya que menos * más = menos;
    }
  }
}

// Instanciamiento de objetos clase Persona
$c1 = new Coche("Ferrari", "F40", "Rojo Corssa", 180);

// Mostramos info del coche
echo $c1->mostrarInfo();

// Lo aceleramos y volvemos a mostrar la info actualizada
echo $c1->acelerarCoche(10);
echo $c1->mostrarInfo();

// Lo frenamos y volcemos a mostrar la info actualizada
echo $c1->frenarCoche(60);
echo $c1->mostrarInfo();

// Modificamos la velocidad y volcemos a mostrar la info actualizada
echo $c1->modificarVelocidad(-40);
echo $c1->mostrarInfo();

?>