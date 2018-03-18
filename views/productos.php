<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style-productos.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<script type="text/javascript" src="../assets/js/jquery-3.2.1.js"></script>
	<meta charset="utf-8">
</head>
<body>

  	<div class="container">
		<div class="font">
			<h1 align="center">Productos</h1>
		</div>
		<div class="productos">
			<div class="col-4">
				<div class="tarjeta">
					<img src="../assets/img/example1.jpeg"/>
					<div class="add-to-cart">
						<i class="ion-android-add"></i>
						<span>Añadir al carrito</span>
					</div>
					<div class="info-productos">
					  	<h3>Uniformes de futbol</h3>
					  	<p>Uniformes personalizados de futbol para 11 personas.</p>
					  	<div class="price">
					    	<s>$3299.00</s>$3000.00
					  	</div>
					</div>
					<a href="#"></a>
				</div>
			</div>
			<div class="col-4">
				<div class="tarjeta">
					<img src="../assets/img/example2.jpg"/>
					<div class="add-to-cart">
						<i class="ion-android-add"></i>
						<span>Añadir al carrito</span>
					</div>
					<div class="info-productos">
				  		<h3>Balon Wilson</h3>
				  		<p>Balon para futbol americano de la mejor calidad.</p>
				  		<div class="price">
				    		<s>$849.00</s>$800.00
				  		</div>
					</div class="info-productos">
					<a href="#"></a>
				</div>
			</div>
			<div class="col-4">
				<div class="tarjeta">
					<img src="../assets/img/example3.jpeg"/>
					<div class="add-to-cart">
						<i class="ion-android-add"></i>
						<span>Añadir al carrito</span>
					</div>
					<div class="info-productos">
				  		<h3>Pelotas de Tenis</h3>
				  		<p>Pelotas de la mejor calidad para el deporte blanco.</p>
				  		<div class="price">
				    		<s>$109.00</s>$100.00
				  		</div>
					</div class="info-productos"><a href="#"></a>
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