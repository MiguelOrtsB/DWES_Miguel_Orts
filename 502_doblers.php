<form action="" method="get">
  <p><label for="dinero">Dinero: </label>
  <input type="text" name="dinero" id="dinero"></p>
  <input type="submit" value="Descomponer">
</form>

<p>
  <?php
  if(isset($_GET['dinero'])) { // Comprobamos que el formulario realmente recoja un valor

    $dinero = $_GET['dinero']; // Asignamos lo introducido por el usuario a una variable $dinero
    $c1 = 0; // Un contador por cada billete y moneda existente: 500, 200, 100, 50...
    $c2 = 0;
    $c3 = 0;
    $c4 = 0;
    $c5 = 0;
    $c6 = 0;
    $c7 = 0;
    $c8 = 0;
    $c9 = 0;

    while($dinero >= 500){ // Mientras el valor recojido sea mayor o igual que 500... Bucle while
      $dinero = $dinero - 500; // Restamos ese valor recojido a 500 para actualizar dicho valor y poder seguir calculando
      $c1++; // Sumamos 1 billete de 500 al contador
      if($dinero < 500) { /* Pequeño filtro para que cuando el valor sea menor que 500 entonces muestre por pantalla la 
        cantidad de billetes que ha recojido el contador en total. Ya que sinó, mostraría por pantalla constantemente el 
        incremento del contador (1 billete de 500, 2 billetes de 500, 3 billetes de 500... */
        echo "$c1 billetes de 500€";
        echo "<br>";
      }
    }

    // Y así sucesivamente con cada tipo de billete y moneda con su respectivo bucle While y contador individual

    while($dinero >= 200){
      $dinero = $dinero - 200;
      $c2++;
      if($dinero < 200) {
        echo "$c2 billetes de 200€";
        echo "<br>";
      }
    }

    while($dinero >= 100){
      $dinero = $dinero - 100;
      $c3++;
      if($dinero < 100) {
        echo "$c3 billetes de 100€";
        echo "<br>";
      }
    }

    while($dinero >= 50){
      $dinero = $dinero - 50;
      $c4++;
      if($dinero < 50) {
        echo "$c4 billetes de 50€";
        echo "<br>";
      }
    }

    while($dinero >= 20){
      $dinero = $dinero - 20;
      $c5++;
      if($dinero < 20) {
        echo "$c5 billetes de 20€";
        echo "<br>";
      }
    }

    while($dinero >= 10){
      $dinero = $dinero - 10;
      $c6++;
      if($dinero < 10) {
        echo "$c6 billetes de 10€";
        echo "<br>";
      }
    }

    while($dinero >= 5){
      $dinero = $dinero - 5;
      $c7++;
      if($dinero < 5) {
        echo "$c7 billetes de 5€";
        echo "<br>";
      }
    }

    while($dinero >= 2){
      $dinero = $dinero - 2;
      $c8++;
      if($dinero < 2) {
        echo "$c8 monedas de 2€";
        echo "<br>";
      }
    }

    while($dinero >= 1){
      $dinero = $dinero - 1;
      $c9++;
      if($dinero < 1) {
        echo "$c9 monedas de 1€";
        echo "<br>";
      }
    }
      
  }
  ?>
</p>