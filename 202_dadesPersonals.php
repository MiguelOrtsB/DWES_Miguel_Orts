<!DOCTYPE html>
<html>
<body>

<h1>My second PHP page</h1>

<?php
$nombre="Miguel";
$apellido="Orts";
$apellido2="Blaya";
$mail="miguel@gmail.com";
$nacimiento="06/06/1997";
$telf=666666666;

echo ( "<table border>
  <tr>
    <td><b>Nombre</b></td>
    <td>$nombre</td>
  </tr>
  <tr>
    <td><b>Apellido</b></td>
    <td>$apellido</td>
  </tr>
  <tr>
    <td><b>Segundo Apellido</b></td>
    <td>$apellido2</td>
  </tr>
  <tr>
    <td><b>Correo</b></td>
    <td>$mail</td>
  </tr>
  <tr>
    <td><b>Año de nacimiento</b></td>
    <td>$nacimiento</td>
  </tr>
  <tr>
    <td><b>Teléfono</b></td>
    <td>$telf</td>
  </tr>
</table> ")
?>
</body>
</html>