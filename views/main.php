<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="../img/rollo-de-pelicula.png"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../styles/_carruselstyle.css">
  <link rel="stylesheet" type="text/css" href="../styles/style.css">
  <script src="../js/carrusel.js"></script>
  <title>StrongSports</title>
</head>
<body>
  <?php require ('navbar.php'); ?>
  <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img src="https://images.pexels.com/photos/883313/pexels-photo-883313.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" style="width:100%">
    <div class="text">Caption One</div>
  </div>

  <div class="mySlides fade">
    <img src="https://images.pexels.com/photos/747909/pexels-photo-747909.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <img src="https://images.pexels.com/photos/883313/pexels-photo-883313.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->

<iframe class="map" src="https://snazzymaps.com/embed/50167"></iframe>

<h1 align="center"><b>Envianos tus comentarios, sugerencias, quejas y aclaraciones</b></h1><br>
  <div class="container" id="estilo1">
    <div align="justify" >
      <form action="main.php" method="post">
        <h4><b>Nombre: *</b></h4>
        <input type="text" name="nombre" id="nombre" required="true">
        <h4><b>E-mail: *</b></h4>
        <input type="text" name="correo" id="correo" required="true">
        <h4><b>Telefono: *</b>
        </h4><input type="text" name="telefono" id="telefono" required="true">
        <h4><b>Comentario: *</b>
        </h4><textarea name="comment" id="comment" rows="5" cols="40" required="true"></textarea><br>
        <p align="center"><input type="submit" align="center"></p>
      </form>
    </div>
    
  </div>

  <?php
  //include 'enviocorreo.php';
  ?>



</body>
</html>