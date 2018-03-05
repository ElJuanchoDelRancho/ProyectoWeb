@extends('layout')

@section('content')
	
	<iframe class="map" src="https://snazzymaps.com/embed/50167"></iframe>
	<!--<iframe src="https://snazzymaps.com/embed/51427" class="map"/>-->

	<div class="container coments">
		<h1>Envíanos tus comentarios, sugerencias, quejas y aclaraciones</h1>
		<div class="coments-form">
    		<form action="main.php" method="post">
      			<p>Nombre: *</p><input type="text" name="nombre" id="nombre" required="true">
      			<p>E-mail: *</p><input type="text" name="correo" id="correo" required="true">
      			<p>Teléfono: *</p><input type="text" name="telefono" id="telefono" required="true">
      			<p>Comentario: *</p><textarea name="comment" id="comment" rows="5" cols="40" required="true"></textarea>
      			<input type="submit" align="center" value="Enviar">
    		</form>
  		</div>
	</div>

@endsection
