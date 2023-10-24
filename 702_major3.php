<form action="" method="get">
  <p><label for="dinero">Número 1: </label>
  <input type="text" name="numero1" id="numero1"></p>
  <p><label for="dinero">Número 2: </label>
  <input type="text" name="numero2" id="numero2"></p>
  <p><label for="dinero">Número 3: </label>
  <input type="text" name="numero3" id="numero3"></p>
  <input type="submit" value="Calcular">
</form>

<?php

  if(isset($_GET['numero1']) && isset($_GET['numero2']) && isset($_GET['numero3'])) {

    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    $numero3 = $_GET['numero3'];

    if($numero1 > $numero2){
      if($numero1 > $numero3){
        echo "El número mayor es el 1";
      }
    }
    
    if($numero2 > $numero1){
      if($numero2 > $numero3){
        echo "El número mayor es el 2";
      }
    }
    
    if($numero3 > $numero1){
      if($numero3 > $numero2){
        echo "El número mayor es el 3";
      }
    }
    
    if($numero1 == $numero2){
      if($numero1 == $numero3){
        echo "Los tres números son iguales";
      }
    }

  }
  ?>
</p>