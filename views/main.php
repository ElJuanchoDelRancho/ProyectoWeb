<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="../img/rollo-de-pelicula.png"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>StrongSports</title>
</head>
<body>
  <?php require ('navbar.php'); ?>
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <a href="#"><img src="https://images.pexels.com/photos/532805/pexels-photo-532805.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Football" style="width:100%;"></a>
         <div class="carousel-caption">
          <h3>Jerseys</h3>
          <p>40% de descuento</p>
        </div>
      </div>

      <div class="item">
        <img src="https://images.pexels.com/photos/209841/pexels-photo-209841.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Balones" style="width:100%;">
          <div class="carousel-caption">
          <h3>Balones</h3>
          <p>Balones 2x1</p>
        </div>
      </div>

        <div class="item">
        <img src="https://images.pexels.com/photos/416717/pexels-photo-416717.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Pesas" style="width:100%;">
          <div class="carousel-caption">
          <h3>Pesas</h3>
          <p>Pesas 20% de descuento</p>
        </div>
      </div>

        <div class="item">
        <img src="https://images.pexels.com/photos/209977/pexels-photo-209977.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Raquetas" style="width:100%;">
          <div class="carousel-caption">
          <h3>Raquetas</h3>
          <p>Raquetas desde 2000 pesos</p>
        </div>
      </div>
    
      <div class="item">
        <img src="https://images.pexels.com/photos/386024/pexels-photo-386024.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bicicletas" style="width:100%;">
          <div class="carousel-caption">
          <h3>Bicicletas  </h3>
          <p>Bicicletas desde 4000 pesos</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>
</html>