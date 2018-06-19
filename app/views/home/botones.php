<?php

if (isset($_COOKIE["IDIOMA"])) {
  //header("Location: ./");
}

?>

  <!DOCTYPE html>
  <html>
  <head>
    <title>Selecciona el idioma</title>
    <link rel="stylesheet" type="text/css" href="assets/css/botones.css">
    <link rel="shortcut icon" type="image/png" href="assets/img/icon.png"/>
  </head>
  <body>
    
<div class="jumbotron text-center" >
  <div class="container"> 
    <h1>Bienvenido a StrongSports</h1>
    <p style="color:#888;">Tienda de deportes</p>
  </div>
</div>
<div class="container"> 
  <!-- Example row of columns -->  
  <div class="row">
    <div class="col-md-12 text-center">
      <h2 class="mrng-60-top">Elige tu lenguaje</h2>
    </div>
  </div>
  <form action="?c=home&a=index" method="POST" id="form1">
</form>
  <div class="row">
    <div class="col-md-3 col-sm-3 col-xs-6"><button type="submit" form="form1" class="btn btn-sm animated-button thar-one" id="es" name="es">Español </button> </div>
    <div class="col-md-3 col-sm-3 col-xs-6"> </div>
    <div class="col-md-3 col-sm-3 col-xs-6"> </div>
    <div class="col-md-3 col-sm-3 col-xs-6"> <button type="submit" form="form1" class="btn btn-sm animated-button thar-one" id="en" name="en">English</button> </div>
  </div>
  <br>
   <footer class="jumbotron text-center">
  <div class="container">
    <p style="color:#888">© Strong Sports 2018</p>
    </div>
  </footer>
  </body>
  </html>