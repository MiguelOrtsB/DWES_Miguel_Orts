<form action="" method="get">
  <p><label for="dinero">Edad: </label>
  <input type="text" name="edad" id="edad"></p>
  <input type="submit" value="Calcular">
</form>

<?php

  if(isset($_GET['edad'])) {

    if($_GET['edad'] < 3){
      echo "Bebé"; 
    }elseif($_GET['edad'] >= 3 && $_GET['edad'] <= 12){
      echo "Niño";
    }elseif($_GET['edad'] >= 13 && $_GET['edad'] <= 17){
      echo "Adolescente";
    }elseif($_GET['edad'] >= 18 && $_GET['edad'] <= 66){
      echo "Adulto";
    }else{
      echo "Jubilado";
    }
  
  }
  ?>
</p>