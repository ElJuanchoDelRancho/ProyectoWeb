<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		td, th {
			text-align: center;
			border: 1px solid #444;
			margin: 0;
			padding: 8px;
		}
		thead {
			background-color: #444;
			color: white;
		}
		table {
			border-collapse: collapse;
		}
		tbody tr:nth-child(odd) {
			background-color: rgb(200,200,200);
		}
		tbody tr:nth-child(even) {
			background-color: rgb(230,230,230);
		}
		.ico {
			width: 100%;
			cursor: pointer;
		}
		.data-client {
			border: 1px solid rgb(230,230,230);
		}
	</style>
</head>
<body>

	<?php

	if ($sesion == false)
		header("Location: ./");
	$cuentaController = new Cuentas();
	$usuario = $cuentaController->getCuentasByUsername($_SESSION['nombre_usuario']);
	$persona = new Usuarios();
	$miPersona = $persona->getUsuariosIdCuenta($usuario['id']);
	$direccion = new Direcciones();
	$miDireccion = $direccion->getDireccionesIdUsuario($miPersona['id']);

	$factura = new Facturas();
	$miFactura = $factura->getFacturas($idFactura);
	$venta = new Ventas();
	$misVentas = $venta->getVentasFactura($idFactura);

	?>

	<div class="box2 font">
		<div class="data-client" style="display: inline-block;">
		<div class="col-12">
			<h1 class="font">Factura</h1>
		</div>

		<div class="col-12">
			<div class="col-4">
				<p><?php echo "Cliente: " . $miPersona['nombres'] . " " . $miPersona['apellidos'] ?></p>
				<p><?php echo "Dirección: " . $miDireccion['calle'] . " #" . $miDireccion['num_int'] . $miDireccion['num_ext'] ?></p>
				<p><?php echo "Colonia: " . $miDireccion['colonia'] ?></p>
			</div>
			<div class="col-4">
				<p><?php echo "Código Postal: " . $miDireccion['codigo_postal'] ?></p>
				<p><?php echo "Municipio: " . $miDireccion['municipio'] ?></p>
				<p><?php echo "Estado: " . $miDireccion['estado'] ?></p>
			</div>
			<div class="col-4">
				<p><?php echo "Fecha Pedido: " . $miFactura['fechaPedido'] ?></p>
				<p><?php echo "Fecha Entrega: " . $miFactura['fechaEntrega'] ?></p>
			</div>
		</div>

		<div class="col-3">
			<a style="display: inline-block;" class="col-4" id="pdf" title="Descargar PDF" href="./?c=documents&a=PDF&id=<?php echo $miFactura['id']; ?>"><img class="ico" src="assets/img/pdf.png"></a>
			<div class="col-2"></div>
			<a style="display: inline-block;" class="col-4" id="xml" title="Descargar XML" href="./?c=documents&a=XML&id=<?php echo $miFactura['id']; ?>"><img class="ico" src="assets/img/xml.png"></a>
		</div>
		</div>
	</div>

	<div class="box2 font">
		<table style="width: 100%">
			<thead>
				<tr>
					<th>ID Producto</th>
					<th>Nombre</th>
					<th>Cantidad</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody style="width: 100%">

				<?php
				$total = 0;
				$items = 0;
				foreach ($misVentas as $x) {
					$producto = new Productos();
					$miProducto = $producto->getProductos($x['id_producto']);
					echo "<tr>";
					echo "<td>". $x['id_producto'] . "</td>";
					echo "<td>". $miProducto['nombre'] . "</td>";
					echo "<td>". $x['cantidad']. "</td>";
					echo "<td>$". $x['subtotal']."</td>";
					echo "</tr>";
					$total += $x['subtotal'];
					$items += $x['cantidad'];
				}
				$descuentos = new Descuentos();
				$listaDescuentos = $descuentos->readDescuentos();
				$descuento = 0;
				foreach ($listaDescuentos as $desc) {
					if ($items >= $desc['cantidad']) {
						$descuento = $desc['porcentaje'];
					}
				}
				$total -= $total * ($descuento / 100);
				echo "<tr>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td>" . $items . "</td>";
				echo "<td>$" . $total;
				if ($descuento != 0) {
					echo " (-" . $descuento . "% de descuento)</td>";
				} 
				echo "</tr>";
				?>
			</tbody>
		</table>
	</div>

	<div class="box2" style="display: inline-block;">
		<button id="listo" class="col-3" style="float: right;">¡Listo!</button>
	</div>

</body>
</html>

<script type="text/javascript">
	$("#listo").click(function() {
		window.location = "./";
	});
	$("#pdf").click(function() {
		var idFactura = $("#pdf").attr("data-id");
		console.log(idFactura);
		$.ajax({
			type: "POST",
			url: "./?c=documents&a=PDF",
			data: { id_factura: idFactura},
			success: function (data, textStatus, jqXHR) {
            	console.log("Te amo Jime");
        	},
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("Error en llamada Ajax");
            }
		});
	});
	$("#xml").click(function() {
		var idFactura = $("#xml").attr("data-id");
		console.log(idFactura);
		$.ajax({
			type: "POST",
			url: "./?c=documents&a=XML",
			data: { id_factura: idFactura},
			success: function (data, textStatus, jqXHR) {
            	console.log('Hola papa');
        	},
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("Error en llamada Ajax");
            }
		});
	});
</script>