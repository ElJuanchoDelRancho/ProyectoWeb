<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/_carruselstyle.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="shortcut icon" type="image/png" href="../img/icon.png"/>
  <script src="../js/carrusel.js"></script>
  <title>StrongSports</title>
</head>
<body>

<?php
  include("navbar.php")
?>

<iframe class="map" src="https://snazzymaps.com/embed/50167"></iframe>
<!--<iframe src="https://snazzymaps.com/embed/51427" class="map"/>-->

<div class="jumbo">
  <div class="coments">
    <h1>Envíanos tus comentarios, sugerencias, quejas y aclaraciones</h1>
    <form action="main.php" method="post">
      <div class="col-6"><p>Nombre: *</p><input type="text" name="nombre" id="nombre" required="true"></div>
      <div class="col-6"><p>Apellido: *</p><input type="text" name="correo" id="correo" required="true"></div>
      <div class="col-6"><p>E-mail: *</p><input type="text" name="correo" id="correo" required="true"></div>
      <div class="col-6"><p>Teléfono: *</p><input type="text" name="telefono" id="telefono" required="true"></div>
      <div class="col-12"><p>Comentario: *</p><textarea name="comment" id="comment" rows="5" cols="30" required="true"></textarea></div>
      <div class="col-12 env"><div class="col-3"><button value="Enviar">Enviar</button></div></div>
    </form>
  </div>
</div>

<?php
  //include 'enviocorreo.php';
  include("footer.php");
?>

</body>
</html>