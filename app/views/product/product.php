<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  	<div class="jumbo" style="padding: 30px 7%; display: inline-block;">
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
				    	Precio: $ <?php echo $datos_p["precio"]; ?>
				  	</div>
				  	<br>
				  	<h3>Cantidad</h3>
				  	<div class="btn-group" style="display: inline-block; width: 100%;">
						<button class="col-2" onclick="disminuir();">-</button>
						<div style="padding: 0 20px" class="col-4">
							<input style="width: 100%; height: 50px;" type="text" pattern="[0-9]" value="1" id="cantidad" name="cantidad">
						</div>
						<button class="col-2" onclick="aumentar();">+</button>
					</div>
					<br><br><br>
				  	<div class="btn-group" style="display: inline-block; width: 100%;">
						<button id="myBtn" class="col-6">Añadir al carrito</button>
					</div>
				</div>
			</div>
  		</div>
	</div>

	<div id="myModal" class="modal">

		<div class="modal-content">
			<div class="modal-header">
				<span class="close">&times;</span>
	    		<h2>Añadir al carrito</h2>
			</div>
			<div class="modal-body">
				<p>¿Está seguro de añadir al carrito?</p>
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

	<script type="text/javascript" src="assets/js/modal.js"></script>

	<script type="text/javascript">
		var si = document.getElementById("si");
		var no = document.getElementById("no");

		si.onclick = function() {
			modal.style.animationName = "fadeOut";
			modalC.style.animationName = "slideOut";
			setTimeout(function(){ modal.style.display = "none"; }, 390);

			var id = "<?php echo $datos_p['id']; ?>";
			var nombre = "<?php echo $datos_p['nombre']; ?>";
			var descripcion = "<?php echo $datos_p['descripcion']; ?>";
			var cantidad = document.getElementById("cantidad").value;
			if (isNaN(cantidad)) cantidad = 1;
			var subtotal = cantidad * parseInt("<?php echo $datos_p['precio']; ?>");
			var imagen = "<?php echo $datos_p['imgUrl']; ?>";
			var info = [ id, nombre, descripcion, cantidad, subtotal, imagen ];
			console.log(info);
			
			$.ajax({
				type: "POST",
				url: "./?c=cart&a=AddItem",
				data: {'producto':JSON.stringify(info)},
				success: function (data, textStatus, jqXHR) {
                	console.log("Vientos carnal");
                	console.log(data);
                	getNumberOfItems();
            	},
	            error: function (jqXHR, textStatus, errorThrown) {
	                console.log("Error en llamada Ajax");
	            }
			});
		}

		no.onclick = function() {
			modal.style.animationName = "fadeOut";
			modalC.style.animationName = "slideOut";
			setTimeout(function(){ modal.style.display = "none"; }, 390);
		}
	</script>

	<script type="text/javascript">
		function disminuir() {
			var cantidad = document.getElementById("cantidad").value;
			if (isNaN(cantidad)) cantidad = 1;
			if (cantidad > 0) cantidad--;
			document.getElementById("cantidad").value = cantidad;
		}
		function aumentar() {
			var cantidad = document.getElementById("cantidad").value;
			if (isNaN(cantidad)) cantidad = 1;
			cantidad++;
			document.getElementById("cantidad").value = cantidad;
		}
	</script>

</body>
</html>

<script type="text/javascript">
	$(".hover").mouseleave(function () {
		$(this).removeClass("hover");
	});
</script>