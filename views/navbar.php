<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style-navbar.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style-banner.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style-forms.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<script src="../assets/js/jquery-3.2.1.min.js"></script>
	<meta charset="utf-8">
</head>
<body>

	<div class="navbar">

		<?php
			require_once('../assets/php/login.php');
			$session = new Login();
			if($session->thereIsSession())
			{
				include('banner_session.php');
			}
			else
			{
				include('banner.php');
			}
		?>

		<nav>
			<div class="nav-content">
				<div class="nav-blocks">
					<div class="nav-link dropdown">
						<a href="javascript:void(0)" class="dropbtn">Comprar por deporte</a>
						<div class="dropdown-content smallcontainer">
							<div class="col-3">
								<h3>HOMBRES</h3>
								<ul>
									<li><a href="#">Running</a></li>
									<li><a href="#">Futbol</a></li>
									<li><a href="#">Basquetbol</a></li>
									<li><a href="#">Gimnasio</a></li>
									<li><a href="#">Futbol Americano</a></li>
									<li><a href="#">Tenis</a></li>
									<li><a href="#">Ciclismo</a></li>
								</ul>
							</div>
							<div class="col-3">
								<h3>MUJERES</h3>
								<ul>
									<li><a href="#">Running</a></li>
									<li><a href="#">Gimnasio</a></li>
									<li><a href="#">Futbol</a></li>
									<li><a href="#">Tenis</a></li>
								</ul>
							</div>
							<div class="col-3">
								<h3>NIÑOS</h3>
								<ul>
									<li><a href="#">Running</a></li>
									<li><a href="#">Futbol</a></li>
									<li><a href="#">Basquetbol</a></li>
									<li><a href="#">Gimnasio</a></li>
								</ul>
							</div>
							<div class="col-3">
								<h3>NIÑAS</h3>
								<ul>
									<li><a href="#">Running</a></li>
									<li><a href="#">Futbol</a></li>
									<li><a href="#">Basquetbol</a></li>
									<li><a href="#">Gimnasio</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="nav-link dropdown">
						<a href="javascript:void(0)" class="dropbtn">Hombre</a>
						<div class="dropdown-content smallcontainer">
							<div class="col-4">
								<h3>CALZADO</h3>
								<ul>
									<li><a href="#">Running</a></li>
									<li><a href="#">Futbol</a></li>
									<li><a href="#">Basquetbol</a></li>
									<li><a href="#">Gimnasio</a></li>
									<li><a href="#">Futbol Americano</a></li>
									<li><a href="#">Casual</a></li>
									<li><a href="#">Campismo</a></li>
								</ul>
							</div>
							<div class="col-4">
								<h3>ROPA</h3>
								<ul>
									<li><a href="#">Futbol</a></li>
									<li><a href="#">Running</a></li>
									<li><a href="#">Gimnasio</a></li>
									<li><a href="#">Futbol Americano</a></li>
									<li><a href="#">Basquetbol</a></li>
									<li><a href="#">Uniformes</a></li>
									<li><a href="#">Playeras</a></li>
									<li><a href="#">Shorts y Pantalones</a></li>
								</ul>
							</div>
							<div class="col-4">
								<h3>ACCESORIOS</h3>
								<ul>
									<li><a href="#">Running</a></li>
									<li><a href="#">Futbol</a></li>
									<li><a href="#">Gimnasio</a></li>
									<li><a href="#">Futbol Americano</a></li>
									<li><a href="#">Balones</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="nav-link dropdown">
						<a href="javascript:void(0)" class="dropbtn">Mujer</a>
						<div class="dropdown-content smallcontainer">
							<div class="col-4">
								<h3>CALZADO</h3>
								<ul>
									<li><a href="#">Running</a></li>
									<li><a href="#">Casual</a></li>
									<li><a href="#">Gimnasio</a></li>
									<li><a href="#">Sandalias</a></li>
									<li><a href="#">Calcetas</a></li>
								</ul>
							</div>
							<div class="col-4">
								<h3>ROPA</h3>
								<ul>
									<li><a href="#">Blusas</a></li>
									<li><a href="#">Tops y Bras</a></li>
									<li><a href="#">Leggings</a></li>
									<li><a href="#">Shorts y Pantalones</a></li>
									<li><a href="#">Running</a></li>
									<li><a href="#">Uniformes</a></li>
								</ul>
							</div>
							<div class="col-4">
								<h3>ACCESORIOS</h3>
								<ul>
									<li><a href="#">Running</a></li>
									<li><a href="#">Fitness</a></li>
									<li><a href="#">Gimnasio</a></li>
									<li><a href="#">Muñequeras</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="nav-link dropdown">
						<a href="javascript:void(0)" class="dropbtn">Niños</a>
						<div class="dropdown-content smallcontainer">
							<div class="col-4">
								<h3>CALZADO</h3>
								<ul>
									<li><a href="#">Running</a></li>
									<li><a href="#">Futbol</a></li>
									<li><a href="#">Todo Calzado</a></li>
								</ul>
							</div>
							<div class="col-4">
								<h3>ROPA</h3>
								<ul>
									<li><a href="#">Futbol</a></li>
									<li><a href="#">Running</a></li>
									<li><a href="#">Uniformes</a></li>
									<li><a href="#">Playeras</a></li>
									<li><a href="#">Shorts y Pantalones</a></li>
								</ul>
							</div>
							<div class="col-4">
								<h3>ACCESORIOS</h3>
								<ul>
									<li><a href="#">Running</a></li>
									<li><a href="#">Futbol</a></li>
									<li><a href="#">Mochilas</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="nav-link dropdown">
						<a href="javascript:void(0)" class="dropbtn">Niñas</a>
						<div class="dropdown-content smallcontainer">
							<div class="col-4">
								<h3>CALZADO</h3>
								<ul>
									<li><a href="#">Running</a></li>
									<li><a href="#">Casual</a></li>
									<li><a href="#">Todo Calzado</a></li>
								</ul>
							</div>
							<div class="col-4">
								<h3>ROPA</h3>
								<ul>
									<li><a href="#">Blusas</a></li>
									<li><a href="#">Tops y Bras</a></li>
									<li><a href="#">Leggings</a></li>
									<li><a href="#">Shorts y Pantalones</a></li>
									<li><a href="#">Running</a></li>
									<li><a href="#">Uniformes</a></li>
								</ul>
							</div>
							<div class="col-4">
								<h3>ACCESORIOS</h3>
								<ul>
									<li><a href="#">Running</a></li>
									<li><a href="#">Futbol</a></li>
									<li><a href="#">Mochilas</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="nav-link">
						<a href="contacto.php" class="dropbtn">Contacto</a>
					</div>
				</div>
			</div>
			<div class="hamburger-menu">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
		</nav>
	</div>

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