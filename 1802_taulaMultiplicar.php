<form action="" method="get">
  <p><label for="dinero">Tabla de multiplicar: </label>
  <input type="text" name="tabla" id="tabla"></p>
  <input type="submit" value="Calcular">
</form>

<table border id="tabla">
        <tr>
            <th>a</th>
            <th>*</th>
            <th>b</th>
            <th>=</th>
            <th>a*b</th>
        </tr>

<?php
  $a = $_GET["tabla"];
  if(isset($_GET['tabla'])) {

    for($i = 1; $i < 11; $i++){
      echo "<tr>";
      echo "<td>" . $a . "</td>";
      echo "<td>*</td>";
      echo "<td>" . $i . "</td>";
      echo "<td>=</td>";
      echo "<td>" . $a * $i . "</td>";
      echo "</tr>";
    }
  }
  ?>
  </table>
</p>