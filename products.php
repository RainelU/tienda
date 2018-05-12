<?php 
	
	try{
		$title = "Productos La Tiendita";

		ob_start();
		include_once __DIR__ . '/templates/navbar.html.php';
		$navbar = ob_get_clean();

		ob_start();
		include_once __DIR__ . '/app/conexion.config.php';
		$conexion = ob_get_clean();

		ob_start();
		include_once __DIR__ . '/templates/products-items.html.php';
		$products = ob_get_clean();

		include_once __DIR__ . '/templates/layout-products.html.php';

	}catch(PDOException $e){
		$products = $e->getMessage();

		echo $products;
	}
