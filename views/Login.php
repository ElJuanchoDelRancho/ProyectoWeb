<?php
  /*require_once('../assets/php/login.php');
  $session = new Login();
  if($session->thereIsSession() == true)
  {
    header('Location: main.php');
  }*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>StrongSports | Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/Login.css">
  <link rel="shortcut icon" type="image/png" href="../assets/img/icon.png"/>
</head>
<body>
	
  <?php include('navbar.php'); ?>

  <div class="login">
    <div class="login-triangle"></div>
    
    <h2 class="login-header">Login</h2>

    <form action="Login.php" name="miform" method="post"  class="login-container">
      <br>
      <p><input type="text" name="usuario" class="cien" placeholder="Nombre"></p><br>
      <p><input type="password" name="contrasena" class="cien" placeholder="Password"></p><br>
      <p><input type="submit" name="ingresar" class="cien" value="Iniciar Sesión"></p>
    </form>
  </div>

  <?php include("footer.php"); ?>

</body>
</html>