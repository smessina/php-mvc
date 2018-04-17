<?php

	require_once 'modelo/producto.php';

	$unProducto = new Producto("Cafe", 22.45, 300);

	$datos =  $unProducto->getProducto();

	$plantilla = file_get_contents('vista/producto.html');

	$diccionario = array("{NOMBRE}", "{PRECIO}", "{STOCK}");

	echo str_replace($datos, $diccionario, $plantilla);


?>