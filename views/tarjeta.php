<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/tarjeta.css">
</head>
<body>
	<?php require ('navbar.php'); ?>
<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Datos de envio</h2>

  <form class="login-container">
    <p><input type="Nombre" placeholder="Nombre">
    	<input type="Usuario" placeholder="Usuario">
    </p>

    <p><input type="ApellidoP" placeholder="Apellido Paterno">
		<input type="Password" placeholder="Password">
    </p>

    <p><input type="ApellidoM" placeholder="Apellido Materno"></p>

    <p><input type="Email" placeholder="Email">
    	<input type="Confirmar" placeholder="Confirmar">
    </p>
   
    <p><input type="Tarjeta" placeholder="Tarjeta">
    	<input type="Cuv" placeholder="CUV">
    </p>
    <p><input type="Exp" placeholder="ExpData"></p>
    <p><input type="submit" class="cien" value="Siguiente"></p>
  </form>
</div>
<?php
  //include 'enviocorreo.php';
  include("footer.php");
?>
</body>
</html>






