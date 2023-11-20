<?php

class Cliente{
  public $nombre;
  private $numero;
  private $soportesAlquilados = array();
  private $numSoportesAlquilados;
  private $maxAlquilerConcurrente;

  function __construct($nombre, $numero){
    $this->nombre = $nombre;
    $this->numero = $numero;
    $this->soportesAlquilados;
    $this->numSoportesAlquilados = 0;
    $this->maxAlquilerConcurrente = 3;
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
    echo ("<br>Nombre: ".$this->nombre. " <br> Soportes alquilados: ".$this->numSoportesAlquilados ." <br>");
  }

  function alquilar(Soporte $s) : bool{
    if($this->numSoportesAlquilados == $this->maxAlquilerConcurrente){ 
      echo "<br>Este cliente tiene 3 elementos alquilados. No puede alquilar más en este videoclub hasta que no devuelva algo <br>";
    }else{
      if(in_array($s, $this->soportesAlquilados)){
        echo "<br>El cliente ya tiene alquilado el soporte ".$s->titulo."<br>";
      }else{
        array_push($this->soportesAlquilados, $s);
        $this->numSoportesAlquilados++;
        echo "<br>Alquilado soporte a: <b>".$this->nombre."</b><br>";
        echo "<br> ".$s->muestraResumen()."";
      }  
    }
    return true;  
  }
  
  function tieneAlquilado(Soporte $s) : bool{
    $contador = 0;
    for($i = 0; $i < count($this->soportesAlquilados); $i++){ // Recorremos el Array
      if($this->soportesAlquilados[$i]==$s){ // Si se encuetra el título se incrementa el contador
        $contador++;
      }
    }
    if($contador > 0){ // Cuando salimos del For comprobamos si el contador es mayor que 0. Si es así, es que ya existe el título
      echo "<br>El cliente ya tiene alquilado el soporte ".$s->titulo."<br>";
    }else{
      echo "<br>El cliente no tiene alquilado el soporte ".$s->titulo."<br>";
    }
    return true;
  }
  // FALTA SOLUCIONAR PROBLEMA (SÓLO MUESTRA 1 RESULTADO)!!!!
  function devolver($numSoporte) : bool{
    $contador = 0;
    $indice = 0;
    for($i = 0; $i < count($this->soportesAlquilados); $i++){ 
      if($this->soportesAlquilados[$i]->numero == $numSoporte){
        $indice = $i;
        $contador++;
      }
    }
    if($contador > 0){ 
      array_splice($this->soportesAlquilados, $indice); 
      $this->numSoportesAlquilados--;
      echo "<br> Se ha devuelto el soporte correctamente <br>";
    }else{
      echo "<br>No se ha podido encontrar el soporte en los alquileres de este cliente <br>";
    }
    return true;
  }

  function listarAlquileres(){
    echo ("<br><b>El cliente tiene ".$this->numSoportesAlquilados." soportes alquilados:</b> <br>");
      for($i = 0; $i < count($this->soportesAlquilados); $i++){
        echo $this->soportesAlquilados[$i]->muestraResumen();
        echo  "<br>";
      }
    }

}

?>