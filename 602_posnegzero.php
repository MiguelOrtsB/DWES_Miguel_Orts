<form action="" method="get">
  <p><label for="dinero">Número: </label>
  <input type="text" name="numero" id="numero"></p>
  <input type="submit" value="Calcular">
</form>

<?php

  if(isset($_GET['numero'])) {

    if($_GET['numero'] > 0){
      echo "Tú número es positivo";
    }elseif($_GET['numero'] < 0){
      echo "Tú número es negativo";
    }else{
      echo "Tú número es igual a 0";
    }
  
  }
  ?>
</p>