<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  	<div class="jumbo" style="padding: 10px 7%; display: inline-block;">
  		<div class="col-6">
  			<div class="productos">
				<div class="tarjeta">
					<img src="assets/img/products/<?php echo $datos_p['imgUrl']; ?>"/>
					<div class="add-to-cart">
						<i class="ion-android-add"></i>
						<span>Añadir al carrito</span>
					</div>
					<a href="#"></a>
				</div>
			</div>
  		</div>
  		<div class="col-6">
  			<div class="tarjeta">
				<div class="info-productos">
				  	<h3><?php echo $datos_p["nombre"]; ?></h3>
				  	<p><?php echo $datos_p["descripcion"]; ?></p>
				  	<div class="price">
				    	$ <?php echo $datos_p["precio"]; ?>
				  	</div>
				</div>
			</div>
  		</div>
	</div>

</body>
</html>

<script type="text/javascript">
	$(".hover").mouseleave(function () {
		$(this).removeClass("hover");
	});
</script>