<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style-navbar.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style-banner.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style-forms.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/fontawesome-all.min.css">
</head>
<body>
	<div class="banner">
		<div class="col-12">
			<div class="col-3 logo">
				<a href="main.php"></a>
			</div>
			<div class="col-6 searchbar">
				<form>
					<input type="text" name="searchbar1" placeholder="Buscar">
				</form>
			</div>
			<div class="col-3">
				<div class="profile">
					<a href="?logout" class="profile-link font">
						<div class="profile-icon"><i class="fas fa-user-circle"></i></div>
						<div class="profile-username">
							<p><b> <?php echo $_SESSION['nombre_usuario']; ?></b></p>
							<p class="cs"><b>Cerrar sesión</b></p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>