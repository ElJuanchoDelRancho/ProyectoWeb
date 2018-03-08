<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Contacto</title>
	<link rel="icon" type="image/png" href="imgs/Shield.png" />
	<LINK rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<LINK rel="stylesheet" type="text/css" href="ordenar.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="file:///F:/7mo/Web/pagina_web.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style type="text/css">
	#estilo1{
		color:black;
		background:#c3c1c1;
		width:100%;height:100%

	}
</style>
<header>
	<?php 
	include 'barra.php';
	?>

</header>
<body>

	<div class="container">
		<div id="map" style="width:100%;height:500px"></div>
	</div>
	<h1 align="center"><b>Envianos tus comentarios, sugerencias, quejas y aclaraciones</b></h1><br>
	<div class="container" id="estilo1">
		<div align="justify" >
			<form action="contacto.php" method="post">
				<h4><b>Nombre: *</b></h4><input type="text" name="nombre" id="nombre">
				<h4><b>E-mail: *</b></h4><input type="text" name="correo" id="correo">
				<h4><b>Telefono: *</b></h4><input type="text" name="telefono" id="telefono">
				<h4><b>Comentario: *</b></h4><textarea name="comment" id="comment" rows="5" cols="40"></textarea><br>
				<p align="center"><input type="submit" align="center"></p>
			</form>
		</div>
		
	</div>

	<?php
	include 'enviocorreo.php';
	?>
	<script>
		function myMap() {
			var mapCanvas = document.getElementById("map");
			var myCenter = new google.maps.LatLng(20.7033175,-103.389362); 
			var mapOptions = {
				center: myCenter, 
				zoom: 14,

				styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
			};
			var map = new google.maps.Map(mapCanvas,mapOptions);
			var marker = new google.maps.Marker({
				position: myCenter,
				animation: google.maps.Animation.BOUNCE
			});
			marker.setMap(map);
		}
	</script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAM8N7lR1WKm9N_WKyIt81byL8itwlCfg&callback=myMap"></script> 

	<div class="footer">

		<?php 
		include 'pie.php';
		?>
	</div>
</body>
</html>
