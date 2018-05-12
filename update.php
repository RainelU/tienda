<?php 
	try{
		include_once __DIR__ . '/app/conexion.config.php';
	
		$name_edit = $_POST['name-edit'];
		$valor_edit = $_POST['valor-edit'];
		$moneda_edit = $_POST['moneda-edit'];
		$caducidad_edit = $_POST['caducidad-edit'];

		print_r($_POST);

		if (empty($name_edit) || empty($valor_edit) || empty($moneda_edit)) {
			return false;

			header("Location: products.php");
		}else{
			$sql = "UPDATE `producto` SET `nombre_producto` = '$name_edit', `valor_producto` = '$valor_edit', `moneda_producto` = '$moneda_edit', `caduca_producto` = '$caducidad_edit' WHERE `id_producto` = :id";
			$stmt = $conn->prepare($sql);
			$stmt->bindValue(':id', $_POST['id-pasable']);
			$stmt->execute();

			header("Location: products.php");
		}
	}catch(PDOException $e){
		echo $e;
	}
