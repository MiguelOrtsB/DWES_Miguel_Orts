<?php 

class Colegio{
  // Declaración de propiedades
  public $nombre;
  public $estudiantes = array();

  // Declaración constructor
  function __construct($nombre, $estudiantes){
    $this->nombre = $nombre;
    $this->estudiantes = $estudiantes;
  }
  
  // Método para añadir los Estudiantes al array 
  function anadirEstudiantes($estudiante){
    array_push($this->estudiantes, $estudiante);
  }

  // Método para recorrer el array de Estudiantes y mostrar la información en una tabla HTML
  function mostrarEstudiantes(){
    echo ("<h3><b>Estudiantes del colegio ".$this->nombre.":</b></h3>");
    $s = '<table border="1">';
    foreach ($this->estudiantes as $r){
        $s .= '<tr>';
        foreach ($r as $v) {
          $s .= '<td>'.$v.'</td>';
        }
        $s .= '</tr>';
    }
    $s .= '</table>';
    echo $s;
  }

  // Método para calcular la nota media de todos los alumnos y aquellos que tengan su nota individual mayor que la media
  function calcularMedia(){
    $suma = 0; 
    foreach($this->estudiantes as $key){
      $float = floatval($key->nota);
      $suma += $float;
      $notaMedia = $suma / count($this->estudiantes);
    }
    echo "<br> La nota media de todos los alumnos es de ".$notaMedia." <br><br>";
    echo "Los alumnos con la nota superior a la media son: <br>";

    foreach($this->estudiantes as $key){
      $float = floatval($key->nota);
      if($float > $notaMedia){
        echo "- ".$key->nombre." <br>";
      }
    }
  }
}

?>