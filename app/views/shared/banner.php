<?php
	$controller = new CartController();
	$carrito = $controller->GetItems();
	$cantidad = count($carrito);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="banner">
		<div class="col-12">
			<div class="col-3 logo">
				<a href="./"></a>
			</div>
			<div class="col-5 searchbar">
				<form>
					<input type="text" name="searchbar1" placeholder="Buscar">
				</form>
			</div>
			<div class="col-4" style="display: inline-block;">
				<div class="carrito_container">
					<a id="carrito" href="./?c=products&a=cart"><p id="cantidad_productos"><?php echo $cantidad; ?></p></a>
				</div>
				<div class="log-links">
					<div class="log-link"><a href="./?c=account&a=register">Registrarse</a></div>
					<div class="log-link"><a href="./?c=account&a=login">Iniciar Sesión</a></div>
				</div>
			</div>
			
		</div>
	</div>
</body>
</html>