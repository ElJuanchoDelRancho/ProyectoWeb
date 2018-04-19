<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var action = <?php echo $modal; ?>;
	</script>
</head>
<body>

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
				<form action="./?c=home&a=contact" method="post">
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

	<div id="myModal" class="modal">

		<div class="modal-content">
			<div class="modal-header">
				<span class="close">&times;</span>
	    		<h2><?php echo $modalHeader; ?></h2>
			</div>
			<div class="modal-body">
				<?php echo $modalBody; ?>
			</div>
			<div class="modal-footer">
				<h4>&copy; StrongSports 2018</h4>
			</div>
		</div>

	</div>

	<script type="text/javascript" src="assets/js/modal-action.js"></script>

</body>
</html>