<?php 

include 'Estudiante.php';
include 'Colegio.php';

$estudiantes = array();

$colegio = new Colegio("Cesur", $estudiantes);

$estudiante1 = new Estudiante("Juan", "Domínguez", 19, 8);
$estudiante2 = new Estudiante("María", "Salva", 17, 6);
$estudiante3 = new Estudiante("Pepe", "Pérez", 16, 9);

$colegio->anadirEstudiantes($estudiante1);
$colegio->anadirEstudiantes($estudiante2);
$colegio->anadirEstudiantes($estudiante3);

$colegio->mostrarEstudiantes();

$colegio->calcularMedia();

?>