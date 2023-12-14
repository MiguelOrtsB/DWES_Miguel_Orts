<!DOCTYPE html>
<html>
  <head>
  <style>
        table {
            border-spacing: 10px; /* Puedes ajustar el valor según tus preferencias */
        }

        th, td {
            padding: 10px; /* Puedes ajustar el valor según tus preferencias */
        }
    </style>
  </head>
  <body>

  <h1>.CSV</h1>
  <p>Dado un archivo .csv, lo recogemos con PHP y lo mostramos por pantalla.</p>

  <?php
  $fp = fopen("libros.csv", "r"); //En $fp estamos guardando el puntero al archivo.csv que estamos abriendo en modo lectura 'r'

  echo "<table class='default' border>"; // Iniciamos tabla para darle formato por pantalla al archivo .csv que queremos mostrar

  $contador = 0; 
  while ($data = fgetcsv ($fp, 1000, ";")) { /* Creamos un bucle para recorrer tofas las filas del archivo .csv. La función 
    fgetcsv() es la función clave del script que obtiene una línea del puntero a un archivo y la examina para tratar campos CSV. 
    Cada linea del .csv es guardada en el array $data para posteriormente mostrar los datos de las celdas en pantalla. Los 
    parámetros de dicha función son = ('archivo,csv', 'maxima longitud de una línea', ) */
  $linea = explode(",", $data[0]); // Función que divide una cadena en una matriz. En este caso, cada linea del .csv separado por la comas
  echo "<tr>";
  for($i = 0; $i < count($linea); $i++){ // Recorremos cada línea del .csv
    if($contador == 0){ // Si el contador es 0 (primera línea del .csv)
      echo "<th>".$linea[$i]."</th>"; // Lo metemos en un th para que específique el título de los campos de la tabla
    }else{ // Si no es 0, serán celdas normales
      echo "<td>".$linea[$i]. "</td>";
    }
  }
  echo "</tr>";
  $contador++;
  }
  echo "</table>";
  fclose($fp);
  ?>
  </body>
</html>