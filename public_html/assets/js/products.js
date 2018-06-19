	
	getNumberOfItems = function() {
		$.ajax({
			url: './?c=cart&a=GetCount',
	        type: "post",
	        success: function (data, textStatus, jqXHR) {
	            console.log("Hola mama");
	            console.log(data);
	            updateLabelCarrito(data);
	        },
	        error: function (jqXHR, textStatus, errorThrown) {
	            console.log("Error en llamada Ajax");
	        }
		});
	}

	updateLabelCarrito = function(cantidad) {
		console.log(cantidad);
		document.getElementById("cantidad_productos").innerHTML = cantidad;
	}


