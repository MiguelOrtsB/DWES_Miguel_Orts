<?php

class Cliente{
  public $nombre;
  private $numero;
  private $soportesAlquilados = [];
  private $numSoportesAlquilados;
  private $maxAlquilerConcurrente = 3;

  function __construct($nombre, $numero){
    $this->nombre = $nombre;
    $this->numero = $numero;
    $this->soportesAlquilados;
    $this->numSoportesAlquilados = count($this->soportesAlquilados);
    $this->maxAlquilerConcurrente;
  }

  function getNumero(){
    return $this->numero;
  }

  function setNumero($numero){
    $this->numero = $numero;
  }

  function getNumSoportesAlquilados(){
    return $this->numSoportesAlquilados;
  }

  function muestraResumen(){
    return ("<br>Nombre: ".$this->nombre. " Soportes alquilados: ".sizeof($this->soportesAlquilados)." <br>");
  }

  function alquilar(Soporte $s) : bool{
    for($i = 0; $i < count($this->soportesAlquilados); $i++){
      if($this->soportesAlquilados[$i]==$s){
        return "El cliente ya tiene alquilado el soporte ".$s."";
      }else{
        array_push($this->soportesAlquilados, $s);
        return "Alquilado soporte a: <b>".$this->nombre."</b>";
      }    
    }
  }
  
  function tieneAlquilado(Soporte $s): bool{
    for($i = 0; $i < count($this->soportesAlquilados); $i++){
      if($this->soportesAlquilados[$i]==$s){
        return "El cliente ya tiene alquilado el soporte ".$s."";
      }   
    }
  }
}

?>