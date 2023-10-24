<?php
$persona1 = ["Nombre" => "Pepe", "Apellido" => "Pérez", "Ciudad" => "Barcelona"];
$persona2 = ["Nombre" => "Alejandro", "Apellido" => "Ibáñez", "Ciudad" => "Badajoz"];
$persona3 = ["Nombre" => "Raúl", "Apellido" => "Araujo", "Ciudad" => "Madrid"];
$personas = [$persona1, $persona2, $persona3];

echo $persona2["Apellido"];
echo "<br>";
echo var_dump($persona1);
echo "<br>";
echo print_r($persona2);
echo "<br>";
echo ($personas[1]["Apellido"]);
?>