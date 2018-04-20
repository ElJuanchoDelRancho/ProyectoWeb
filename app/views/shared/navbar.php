<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="navbar">

		<?php
			if(isset($_SESSION["nombre_usuario"]))
		  		require_once('../app/views/shared/banner_session.php');
		  	else
		  		require_once('../app/views/shared/banner.php');
		?>

		<nav>
			<div class="nav-content">
				<div class="nav-blocks">
					<div class="nav-link dropdown">
						<a href="javascript:void(0)" class="dropbtn">Comprar por deporte</a>
						<div class="dropdown-content smallcontainer">
							<div class="col-8">
								<h3>HOMBRES</h3>
								<ul class="col-6">
									<li><a href="?c=products&a=category&cat=running">Running</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Futbol</a></li>
									<li><a href="?c=products&a=category&cat=basquetbol">Basquetbol</a></li>
									<li><a href="?c=products&a=category&cat=box">Box</a></li>
								</ul>
								<ul class="col-6">
									<li><a href="?c=products&a=category&cat=gimnasio">Gimnasio</a></li>
									<li><a href="?c=products&a=category&cat=futbol americano">Futbol Americano</a></li>
									<li><a href="?c=products&a=category&cat=tenis">Tenis</a></li>
									<li><a href="?c=products&a=category&cat=ciclismo">Ciclismo</a></li>
								</ul>
							</div>
							<div class="col-4">
								<h3>MUJERES</h3>
								<ul>
									<li><a href="?c=products&a=category&cat=running">Running</a></li>
									<li><a href="?c=products&a=category&cat=gimnasio">Gimnasio</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Futbol</a></li>
									<li><a href="?c=products&a=category&cat=tenis">Tenis</a></li>
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
									<li><a href="?c=products&a=category&cat=futbol">Running</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Futbol</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Basquetbol</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Gimnasio</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Futbol Americano</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Casual</a></li>
								</ul>
							</div>
							<div class="col-4">
								<h3>ROPA</h3>
								<ul>
									<li><a href="?c=products&a=category&cat=futbol">Futbol</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Running</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Gimnasio</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Futbol Americano</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Basquetbol</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Uniformes</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Playeras</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Shorts y Pantalones</a></li>
								</ul>
							</div>
							<div class="col-4">
								<h3>ACCESORIOS</h3>
								<ul>
									<li><a href="?c=products&a=category&cat=futbol">Running</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Futbol</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Gimnasio</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Futbol Americano</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Balones</a></li>
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
									<li><a href="?c=products&a=category&cat=futbol">Running</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Casual</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Gimnasio</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Sandalias</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Calcetas</a></li>
								</ul>
							</div>
							<div class="col-4">
								<h3>ROPA</h3>
								<ul>
									<li><a href="?c=products&a=category&cat=futbol">Blusas</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Tops y Bras</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Leggings</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Shorts y Pantalones</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Running</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Uniformes</a></li>
								</ul>
							</div>
							<div class="col-4">
								<h3>ACCESORIOS</h3>
								<ul>
									<li><a href="?c=products&a=category&cat=futbol">Running</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Fitness</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Gimnasio</a></li>
									<li><a href="?c=products&a=category&cat=futbol">Muñequeras</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="nav-link">
						<a href="./?c=home&a=contact" class="dropbtn">Contacto</a>
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