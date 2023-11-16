<?php 

include 'Soporte.php';
include 'CintaVideo.php';
include 'Dvd.php';
include 'Juego.php';

// Código de prueba para 'Soporte'
$soporte1 = new Soporte("Tenet", 22, 3);
echo "<strong>".$soporte1->titulo."</strong>";
echo "<br>Precio: " .$soporte1->getPrecio() . " euros";
echo "<br>Precio IVA incluido: " .$soporte1->getPrecioConIva() . " euros";
$soporte1->muestraResumen();

// Código de pueba para 'CintaVideo'
$miCinta = new CintaVideo("Los Cazafantasmas", 23, 3.5, 107);
echo "<strong><br>".$miCinta->titulo."</strong>";
echo "<br>Precio: " .$miCinta->getPrecio() . " euros";
echo "<br>Precio IVA incluido: " .$miCinta->getPrecioConIva() . " euros";
$miCinta->muestraResumen();

// Código de pueba para 'Dvd'
$miDvd = new Dvd("Origen", 24, 15, "es,en,fr", "16:9");
echo "<strong><br>".$miDvd->titulo."</strong>";
echo "<br>Precio: " .$miDvd->getPrecio() . " euros";
echo "<br>Precio IVA incluido: " .$miDvd->getPrecioConIva() . " euros";
$miDvd->muestraResumen();

// Código de pueba para 'Juego'
$miJuego = new Juego("The Last of Us Part II", 26, 49.99, "PS4", 1, 1);
echo "<strong><br>".$miJuego->titulo."</strong>";
echo "<br>Precio: " .$miJuego->getPrecio() . " euros";
echo "<br>Precio IVA incluido: " .$miJuego->getPrecioConIva() . " euros";
$miJuego->muestraResumen();

?>