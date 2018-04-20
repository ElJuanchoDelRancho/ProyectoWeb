<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="assets/js/carrusel.js"></script>
</head>
<body>
	
	<div class="slideshow-container">
		<div class="mySlides fade">
			<img src="assets/img/carrusel/carrusel1.jpg">
			<div class="text">Uniformes para equipos</div>
		</div>
		<div class="mySlides fade">
			<img src="assets/img/carrusel/carrusel2.jpg">
			<div class="text">Raquetas</div>
		</div>
		<div class="mySlides fade">
			<img src="assets/img/carrusel/carrusel3.jpg">
			<div class="text">Pesas</div>
		</div>
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>

	<?php include('../app/views/home/productos.php'); ?>

	<div class="box">
		<div class="col-6">
			<iframe class="map" src="https://snazzymaps.com/embed/50167"></iframe>
			<!--<iframe src="https://snazzymaps.com/embed/51427" class="map"/>-->
		</div>
		<div class="col-6">
			<div class="coments">
				<h1>StrongSports</h1>
				<p><b>Dirección:</b> Calle Nueva Escocia 1885, Providencia 5a Sección, 44638 Guadalajara, Jal.<p>
				<p><b>Teléfono:</b> 01 33 3641 3250</p>
				<h4>Envíanos tus comentarios, sugerencias, quejas y aclaraciones</h4>
				<form action="main.php" method="post">
					<div class="col-6"><p>Nombre: *</p><input type="text" name="nombre" id="nombre" required="true"></div>
					<div class="col-6"><p>Apellido: *</p><input type="text" name="apellido" id="apellido" required="true"></div>
					<div class="col-6"><p>E-mail: *</p><input type="text" name="correo" id="correo" required="true"></div>
					<div class="col-6"><p>Teléfono: *</p><input type="text" name="telefono" id="telefono" required="true"></div>
					<div class="col-12"><p>Comentario: *</p><textarea name="comentario" id="comentario" rows="3" cols="30" required="true"></textarea></div>
					<div class="col-12 env"><div class="col-6"><button value="Enviar">Enviar</button></div></div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>