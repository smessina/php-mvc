<?php

	require_once 'modelo/producto.php';
	require_once 'vista/producto.php';

	$producto = new Producto("Cafe", 22.45, 300);

	$vista = new ProductoVista();

	$vista->agregarScript("juli.js");
	$vista->agregarScript("pablo.js");
	$vista->agregarScript("jquery.js");

	echo $vista->mostrar();

	// $unProducto = new Producto("Cafe", 22.45, 300);

	// $datos =  $unProducto->getProducto();

	// $plantilla = file_get_contents('vista/plantillas/catalogo.html');
	
	// $ficha = file_get_contents('vista/producto.html');

	// $diccionario = array("{NOMBRE}", "{PRECIO}", "{STOCK}");

	// $catalogo = str_replace($diccionario, $datos, $ficha);

	// echo str_replace("{CATALOGO}", $catalogo, $plantilla);


?>