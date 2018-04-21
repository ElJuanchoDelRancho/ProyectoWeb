<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  	<div class="container" style="margin-top: -10px; margin-bottom: 30px;">
		<div class="font">
			<h1 align="center">
				<?php 
				if(isset($datos_p[0]['nombre_cat'])) {
					$titulo = str_replace("-", " ", $datos_p[0]['nombre_cat']);
					echo $titulo;
				} else {
					echo "No existe ningún producto";
				}
				?>	
			</h1>
		</div>
		<div class="productos">
		<?php
		foreach ($datos_p as $x) {
		?>
			<div class="col-4">
				<div class="tarjeta">
					<div class="img">
					<img src="assets/img/products/<?php echo $x['imgUrl']; ?>"/></div>
					<div class="add-to-cart">
						<i class="ion-android-add"></i>
						<span>Añadir al carrito</span>
					</div>
					<div class="info-productos">
					  	<h3><?php echo $x["nombre"]; ?></h3>
					  	<p><?php echo $x["descripcion"]; ?></p>
					  	<div class="price">
					    	$ <?php echo $x["precio"]; ?>
					  	</div>
					</div>
					<a href="?c=products&a=select&id=<?php echo $x['id']; ?>"></a>
				</div>
			</div>
		<?php
		}
		?>
		</div>	
	</div>

</body>
</html>

<script type="text/javascript">
	$(".hover").mouseleave(function () {
		$(this).removeClass("hover");
	});
</script>