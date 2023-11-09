<?php 

include 'Biblioteca.php';
include 'Libro.php';

$libros = array();
$biblioteca = new Biblioteca("Biblioteca municipal", $libros);

$libro1 = new Libro("It", "Stephen King", 1986);
echo $libro1->mostrarInfo();

$libro2 = new Libro("El Hobbit", "J.R.R.Tolkien", 1937);
echo $libro2->mostrarInfo();

$biblioteca->anadirLibros($libro1);
$biblioteca->anadirLibros($libro2);
echo  $biblioteca->mostrarLibros();

?>