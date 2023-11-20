<?php 

include 'Cliente.php';
include 'CintaVideo.php';
include 'Dvd.php';
include 'Juego.php';

// Instanciamos un par de objetos cliente
$cliente1 = new Cliente("Bruce Wayne", 23);
$cliente2 = new Cliente("Clark Kent", 33);

// Mostramos el número de cada cliente creado
echo "El identificador del cliente 1 es: " .$cliente1->getNumero();
echo "<br>El identificador del cliente 2 es: " .$cliente2->getNumero();

// Instanciamos algunos soportes
$soporte1 = new CintaVideo("Los Cazafantasmas", 23, 3.5, 107);
$soporte2 = new Juego("The Last of Us Part II", 26, 49.99, "PS4", 1, 1);
$soporte3 = new Dvd("Origen", 24, 15, "es,en,fr", "16:9");
$soporte4 = new Dvd("El Imperio Contraataca", 4, 3, "es,en", "16:9");

//Alquilamos algunos soportes
$cliente1->alquilar($soporte1);
$cliente1->alquilar($soporte2);
$cliente1->alquilar($soporte3);
$cliente1->alquilar($soporte4);

$cliente1->tieneAlquilado($soporte1);

$cliente1->devolver(26);

$cliente1->muestraResumen();

$cliente1->listarAlquileres();  

?>