<form action="" method="get">
  <p><label for="nombre">Nombre: </label>
  <input type="text" name="nombre" id="nombre"></p>
  <p><label for="apellido1">Primer Apellido: </label>
  <input type="text" name="apellido1" id="apellido1"></p>
  <input type="submit" value="enviar">
</form>

<p>
  <?php
  if(isset ($_GET['nombre'])) {
    $nombre = $_GET["nombre"];
    $apellido1 = $_GET["apellido1"];

    echo "Hola $nombre $apellido1";
  }
  ?>
</p>

