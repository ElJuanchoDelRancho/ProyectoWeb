<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="carrito box2">
	<div class="carrito-container">
		
		<div class="col-12 head-carrito" style="display: inline-block;">
			<div class="col-4"><h1 class="font carrito-title">Carrito</h1></div>
			<div class="col-4">
				<?php
				if (count($carrito) > 0)
					echo "<button id='myBtn'>Completar compra</button>";
				else
					echo "<button>Completar compra</button>";
				?>
			</div>
			<div class="col-4">
				<button id="vaciar">Vaciar carrito</button>
			</div>
		</div>

	<?php
	$total = 0;
	$items = 0;
	$pos = 0;
	foreach ($carrito as $x) {
	?>
		
		<div class="item-carrito">
			<div class="col-3">
				<img src="assets/img/products/<?php echo $x['imagen']; ?>">
			</div>
			<div class="col-7" style="display: inline-block;">
				<h3><?php echo $x['nombre']; ?></h3>
				<p><i><?php echo $x['descripcion']; ?></i></p>
				<div class="col-5"><p><b>Cantidad: <?php echo $x['cantidad']; ?></b></p></div>
				<div class="col-5"><p><b>Subtotal: $<?php echo $x['subtotal']; ?></b></p></div>
			</div>
			<div class="col-1 trash-container" title="Eliminar" onclick="eliminar(<?php echo $pos; ?>);">
				<img class="trash" src="assets/img/delete.png">
			</div>
		</div>

	<?php
		$total += $x['subtotal'];
		$items += $x['cantidad'];
		$pos++;
	}
	?>

		<div class="item-carrito">
			<div class="col-3">
			</div>
			<div class="col-7" style="display: inline-block;">
				<div class="col-5"><p><b>Cantidad: <?php echo $items; ?></b></p></div>
				<div class="col-5"><p><b>Total: $<?php echo $total; ?></b></p></div>
			</div>
		</div>

	</div>
	</div>

	<?php
	if ($sesion == true)
	{
	?>
	<div id="myModal" class="modal">

		<div class="modal-content">
			<div class="modal-header">
				<span class="close">&times;</span>
	    		<h2>Completar compra</h2>
			</div>
			<div class="modal-body">
				<p>¿Está seguro de completar la compra?</p>
			</div>
			<div class="modal-footer">
				<div style="display: inline-block; width: 100%;">
					<div>
						<button id="si">Si</button>
					</div>
					<div>
						<button id="no">No</button>
					</div>
				</div>
			</div>
		</div>

	</div>

	<script type="text/javascript">
		var si = document.getElementById("si");
		var no = document.getElementById("no");

		si.onclick = function() {
			window.location = "./?c=products&a=bill";
		}

		no.onclick = function() {
			modal.style.animationName = "fadeOut";
			modalC.style.animationName = "slideOut";
			setTimeout(function(){ modal.style.display = "none"; }, 390);
		}
	</script>


	<?php
	}
	else
	{
	?>
	<div id="myModal" class="modal">

		<div class="modal-content">
			<div class="modal-header">
				<span class="close">&times;</span>
	    		<h2>No has iniciado sesión</h2>
			</div>
			<div class="modal-body">
				<p>Para completar una compra debes iniciar sesión. Tus productos quedarán guardados. ¿Qué deseas hacer?</p>
			</div>
			<div class="modal-footer">
				<div style="display: inline-block; width: 100%;">
					<div>
						<button id="si">Registrarme</button>
					</div>
					<div>
						<button id="no">Iniciar sesión</button>
					</div>
				</div>
			</div>
		</div>

	</div>

	<script type="text/javascript">
		var si = document.getElementById("si");
		var no = document.getElementById("no");

		si.onclick = function() {
			window.location = "./?c=account&a=register";
		}

		no.onclick = function() {
			window.location = "./?c=account&a=login";
		}
	</script>

	<?php
	}
	?>

	<script type="text/javascript" src="assets/js/modal.js"></script>

</body>
</html>

<script type="text/javascript">
	$("#vaciar").click(function() {
		$.ajax({
			type: "POST",
			url: "./?c=cart&a=Empty",
			success: function (data, textStatus, jqXHR) {
            	getNumberOfItems();
            	window.location = "./?c=products&a=cart";
        	},
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("Error en llamada Ajax");
            }
		});
	});
	function eliminar(pos) {
		$.ajax({
			type: "POST",
			url: "./?c=cart&a=DeleteItem",
			data: { borrar: pos},
			success: function (data, textStatus, jqXHR) {
            	getNumberOfItems();
            	window.location = "./?c=products&a=cart";
        	},
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("Error en llamada Ajax");
            }
		});
	}
</script>
