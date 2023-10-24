<p>
  <?php

  /* De esta forma introducimos el dato que queremos validar directamente en la barra de navegación después del "?edad=" 
  y no a través de un formulario HTML al uso con textareas, botones, etc. Todo ello a través del $_GET*/

  if(isset($_GET['edad'])) {

    // Primero comprobamos que su edad no sea menor a 10, ya que si es así no habría nacido hace 10 años...

    if($_GET['edad'] < 10){
      echo "Hace 10 años aún no habías nacido";
    }else{
      $añoFuturo = date("Y") + 10;
      $edadFutura = $_GET['edad'] + 10;
      echo "Dentro de 10 años tendrás $edadFutura";
      echo " (Año $añoFuturo)";

      echo "<br>";

      $edadPasada = $_GET['edad'] - 10;
      $añoPasado = date("Y") - 10;
      echo "Hace 10 años tenías $edadPasada";
      echo " (Año $añoPasado)"; 
     }

     echo "<br>";

     // Luego comprobamos que la edad no sea mayor a 67 porque de ser así ya estaría jubilado.

     if($_GET['edad'] > 67){
      echo "Ya estás jubilado";
    }else{
      $jubilacion = 67 - $_GET['edad'];
      echo "Te quedan $jubilacion años para jubilarte";
    }
  }
  ?>
</p>