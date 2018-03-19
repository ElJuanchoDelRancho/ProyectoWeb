<!DOCTYPE html>
<html>
<head>
	<title>StrongSports | Registro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../assets/css/style-tarjeta.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style-forms.css">
	<link rel="shortcut icon" type="image/png" href="../assets/img/icon.png"/>
</head>
<body>

	<?php include('navbar.php'); ?>

	<div class="login login-box">

		<div class="login-triangle"></div>
		<h2 class="login-header">Dirección de envío</h2>

		<form action="main.php" method="post" class="login-container">

			<div class="col-12">
				<input type="text" name="calle" placeholder="Calle/Avenida" required="true">
			</div>
			<div class="col-6">
				<input type="text" name="numI" placeholder="Número Interior" required="true">
			</div>
			<div class="col-6">
				<input type="text" type="numE" placeholder="Número Exterior">
			</div>
			<div class="col-6">
				<input type="text" name="colonia" placeholder="Colonia" required="true">
			</div>
			<div class="col-6">
				<input type="text" name="ciudad" placeholder="Ciudad/Municipio">
			</div>
			<div class="col-6">
				<input type="text" name="estado" placeholder="Estado">
			</div>
			<div class="col-6">
				<input type="text" name="cp" placeholder="Código Postal">
			</div>
			<div class="col-12">
				<p><input type="checkbox" name="mismos-datos">Facturar mismos datos</p>
			</div>
			<div class="col-12">
				<input type="submit" value="Enviar">
			</div>

		</form>

	</div>

	<?php include('footer.php'); ?>

</body>
</html>