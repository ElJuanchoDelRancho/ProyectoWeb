<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../style/_navbarstyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<nav>
		<div class="nav-content">
			<div class="logo">
				<a href="">LogoPrro</a>
			</div>
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
			</div>
			<div class="logbtn">
				<a href="javascript:void(0)" class="">Ingresar</a>
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