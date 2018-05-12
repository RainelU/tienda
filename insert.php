<?php 
	
	include_once __DIR__ . '/app/conexion.config.php';

	print_r($_POST);

	$name_create = $_POST['name-create'];
	$valor_create = $_POST['valor-create'];
	$moneda_create = $_POST['moneda-create'];
	$caducidad_create = $_POST['caducidad-create'];

	$sql = "INSERT INTO `producto` (`id_factura`, `nombre_producto`, `valor_producto`, `moneda_producto`, `caduca_producto`, `img_producto`) VALUES ('1', '$name_create', '$valor_create', '$moneda_create', '$caducidad_create', '')";

	if (empty($name_create) || empty($valor_create) || empty($moneda_create) || empty($caducidad_create)) {
		header("Location: products.php");
		return false;
	}else if ($conn->query($sql)) {
		header("Location: products.php");
	}else{
		return false;
	}