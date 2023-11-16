<?php

class Juego extends Soporte{
  // Declaración de las propiedades
  public $consola;
  private $minNumJugadores;
  private $maxNumJugadores;
  
  // Declaración del constructor
  public function __construct($titulo , $numero, $precio, $consola, $minNumJugadores, $maxNumJugadores){
    parent::__construct($titulo, $numero, $precio);
    $this->consola = $consola;
    $this->minNumJugadores = $minNumJugadores;
    $this->maxNumJugadores = $maxNumJugadores;
  }

  // Declaración de método (se sobreescribe)
  function muestraResumen(){
    echo ("<br>Juego para: ".$this->consola);
    parent::muestraResumen();
    self::muestraJugadoresPosibles();
  }

  // Método para mostrar el número de jugadores
  function muestraJugadoresPosibles(){
    if($this->minNumJugadores == 1 && $this->maxNumJugadores == 1){
      echo "Para un jugador";
    }
    if($this->minNumJugadores == $this->maxNumJugadores && $this->minNumJugadores > 1){
      echo "Para ".$this->minNumJugadores." jugadores";
    }
    if($this->minNumJugadores < $this->maxNumJugadores && $this->maxNumJugadores > 1){
      echo "De ".$this->minNumJugadores." a ".$this->maxNumJugadores." jugadores";
    }
  }
}

?>