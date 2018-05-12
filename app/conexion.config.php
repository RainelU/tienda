<?php

	try{
		$conn = new PDO("mysql:host=localhost; dbname=tienda", "root", "");
		$res = $conn->query("SELECT * FROM producto");
		?>
			<button class="btn-create" data-toggle="modal" data-target="#exampleModal">Create</button>
		<?php
		foreach ($res as $row) {
			?>
			<!-- AQUI COLOCO UN POCO DE VISTA, PARA TRATAR DE ORDENARLOS TODOS POR $ROW -->
			<div class="div-crud" id="div-crud">
				<section><br><?= $row['nombre_producto'] ?></section>
				<section><br><?= $row['valor_producto'] ?></section>
				<section><br><?= $row['moneda_producto'] ?></section>
				<section><br><?= $row['caduca_producto'] ?></section>
				<section>
					<form action="./update.php" method="post">
						<input type="hidden" name="idU" id="idU" value="<?php echo $row['id_producto'];?>">
					</form>
						<button type="submit" class="btn-edit" id="btn-edit" data-toggle="modal" data-target="#edit">Edit</button>
					<form style="display:none;" method="post" action="./delete.php">
						<input type="hidden" name="id" value="<?php echo $row['id_producto'];?>">
						<button class="btn-remove" data-toggle="modal" data-target="#remove">Remove</button>
					</form>
				</section>
			</div>
			<!-- COMIENZO DEL MODAL CON UN SOLO ID -->
			<?php
		}
	}catch (PDOException $e){
		$title = 'An Error has ocurred';

		$products = "1";

		echo $products;
	}