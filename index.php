<?php 
	try{
		$title = "La Tiendita";

		ob_start();
		include_once __DIR__ . '/templates/output.html.php';
		$output = ob_get_clean();

		ob_start();
		include_once __DIR__ . '/templates/navbar.html.php';
		$navbar = ob_get_clean();

		include_once __DIR__ . '/templates/layout.html.php';
	}catch (PDOException $e){
		$title = 'An error has ocurred';

		$output = 'An error';

		$products = "An error";

		$e->getMessage() . 'in' . $e->getFile() . ':' . $e->getLine();
	}