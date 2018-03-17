<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/_navbarstyle.css">
	<link rel="stylesheet" type="text/css" href="../css/_bannerstyle.css">
	<link rel="stylesheet" type="text/css" href="../css/_formsstyle.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<div class="banner">
		<div class="logo">
			<a href="main.php"></a>
		</div>
		<div class="searchbar">
			<form>
				<input type="text" name="searchbar1" placeholder="Buscar">
			</form>
		</div>
		<div class="log-links">
			<div class="log-link"><a href="tarjeta.php">Registrarse</a></div>
			<div class="log-link"><a href="#">Iniciar Sesión</a></div>
		</div>
	</div>
	<nav>
		<div class="nav-content">
			<div class="nav-blocks">
				<div class="nav-link dropdown">
					<a href="javascript:void(0)" class="dropbtn">Hombres</a>
					<div class="dropdown-content">
						<a href="">Primero</a>
						<a href="">Segundo</a>
					</div>
				</div>
				<div class="nav-link dropdown">
					<a href="javascript:void(0)" class="dropbtn">Mujeres</a>
					<div class="dropdown-content">
						<a href="">Primero</a>
						<a href="">Segundo</a>
					</div>
				</div>
				<div class="nav-link dropdown">
					<a href="javascript:void(0)" class="dropbtn">Niños</a>
					<div class="dropdown-content">
						<a href="">Primero</a>
						<a href="">Segundo</a>
					</div>
				</div>
				<div class="nav-link dropdown">
					<a href="javascript:void(0)" class="dropbtn">Niñas</a>
					<div class="dropdown-content">
						<a href="">Primero</a>
						<a href="">Segundo</a>
					</div>
				</div>
				<div class="nav-link">
					<a href="contact.php" class="dropbtn">Contacto</a>
				</div>
			</div>
		</div>
		<div class="hamburger-menu">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
		</div>
	</nav>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function() {
		$(".hamburger-menu").click(function() {
			if($(this).hasClass("change")) {
				$(this).removeClass("change");
				$(".nav-blocks").removeClass("show-blocks");
			} else {
				$(this).addClass("change");
				$(".nav-blocks").addClass("show-blocks");
			}
		});
	});
</script>