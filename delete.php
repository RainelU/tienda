<?php
	echo "Borrado." . $_POST['id'];


	try{
		include_once './app/conexion.config.php';
		$title = "¡Borrado!";

		$sql = "DELETE FROM `producto` WHERE `id_producto` = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':id', $_POST['id']);
		$stmt->execute();

		header("Location: products.php");
	}catch(PDOException $e){
		echo $e;
	}
