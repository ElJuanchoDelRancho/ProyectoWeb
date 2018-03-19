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
		<h2 class="login-header">Cree una cuenta</h2>

		<form method="post" action="register-next.php" class="login-container">

			<div class="col-6">
				<input type="text" name="nombre" placeholder="Nombre" required="true">
			</div>
			<div class="col-6">
				<input type="text" name="usuario" placeholder="Usuario" required="true">
			</div>
			<div class="col-6">
				<input type="text" name="apellidop" placeholder="Apellido Paterno" required="true">
			</div>
			<div class="col-6">
				<input type="password" name="contrasena" placeholder="Contraseña" required="true">
			</div>
			<div class="col-6">
				<input type="text" name="apellidom" placeholder="Apellido Materno" required="true">
			</div>
			<div class="col-6"></div>
			<div class="col-6">
				<input type="email" name="email" placeholder="Email" required="true">
			</div>
			<div class="col-6">
				<input type="email" name="confirmar" placeholder="Confirmar email" required="true">
			</div>
			<div class="col-6">
				<input type="text" name="tarjeta" placeholder="Tarjeta" required="true">
			</div>
			<div class="col-3">
				<input type="text" name="Cuv" placeholder="CUV" required="true">
			</div>
			<div class="col-3">
				<input type="text" name="exp" placeholder="ExpData" required="true">
			</div>
			<div class="col-12">
				<input type="submit" value="Siguiente">
			</div>

		</form>

	</div>

	<?php include("footer.php"); ?>

</body>
</html>