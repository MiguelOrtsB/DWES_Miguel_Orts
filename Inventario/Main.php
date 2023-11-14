<?php 

include 'Inventario.php';
include 'Producto.php';

// Creamos la cesta de productos
$productos = array();
$inventario = new Inventario($productos);

// Creamos tres productos
$producto1 = new Producto(5, "Tomates", 3.5);
$producto2 = new Producto(2, "Judías", 2.5);
$producto3 = new Producto(12, "Manzanas", 4);

// Los añadimos al inventario
$inventario->anadirProductos($producto1);
$inventario->anadirProductos($producto2);
$inventario->anadirProductos($producto3);
$inventario->mostrarProductos();

// Realizamos el cálculo de los métodos
$inventario->calcularPrecioTotal();
$inventario->stockBajo();

?>