<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>
		<?= $title ?>
	</title>
	<link rel="stylesheet" type="text/css" href="./css/import.css">
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="div-top">
		<h1 class="h1-div-top">La Tiendita Market</h1>
	</div>

	<main>
		<?= 
			$navbar;
		?>
		<?=
			$products;
		?>
	</main>

	<footer class="footer">
		<div class="tienda-footer">
			<p>
				&copy; La Tiendita Rainel
				<?= date('Y')?>		
			</p>
		</div>
	</footer>

	<script src="./bootstrap/js/jquery-3.3.1.min.js"></script>
	<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="./bootstrap/js/popper.min.js"></script>
	<script src="./js/main.js">

	</script>
</body>
</html>