<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/pruebas.css">
	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
</head>
<body>

	<!--<div class="pruebas"></div>-->

	<button id="myBtn">Presiona prro</button>

	<div id="myModal" class="modal">

		<div class="modal-content">
			<div class="modal-header">
				<span class="close">&times;</span>
	    		<h2>Modal Header</h2>
			</div>
			<div class="modal-body">
				<p>Ejemplo de cuerpo de modal</p>
			</div>
			<!--<div class="modal-footer">
				<h4>StrongSports</h4>
			</div>-->
		</div>

	</div>

</body>
</html>

<script type="text/javascript">

	var modal = document.getElementById('myModal');
	var modalC = document.getElementsByClassName("modal-content")[0];
	var btn = document.getElementById("myBtn");
	var span = document.getElementsByClassName("close")[0];
	
	btn.onclick = function() {
		modal.style.animationName = "fadeIn";
		modalC.style.animationName = "slideIn";
	    modal.style.display = "block";
	}
	span.onclick = function() {
		modal.style.animationName = "fadeOut";
		modalC.style.animationName = "slideOut";
		setTimeout(function(){ modal.style.display = "none"; }, 390);
	}
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.animationName = "fadeOut";
			modalC.style.animationName = "slideOut";
			setTimeout(function(){ modal.style.display = "none"; }, 390);
	    }
	}

</script>