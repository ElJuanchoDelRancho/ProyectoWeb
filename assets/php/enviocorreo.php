<?php
/*if(isset($_POST['correo']))
{
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$comentario=$_POST['comment'];
	$asunto="Comentario pagina";
	$servidor='beto11070@gmail.com';
	$mensaje="Tu comentario fue enviado";
	$opinion=$nombre." con telefono: ".$telefono." y correo: ".$correo." te ha enviado el siguiente mensaje: ".$comentario;
	if(mail($servidor, $asunto, $opinion))
	{
		echo "<script>alert('Correo enviado al servidor');</script>";
		if(mail($correo, $asunto, $mensaje))
		{
			echo "<script>alert('Se le ha enviado un correo de confirmación');</script>";
		}
		else
		{
			echo "<script>alert('No se le ha podido enviar un correo de confirmación');</script>";
		}
	}
	else
	{
		echo "<script>alert('No se ha podido enviar el correo enviado al servidor');</script>";
	}
	
	
}*/

	if(isset($_POST['correo']))
	{

		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellido'];
		$correo = $_POST['correo'];
		$telefono = $_POST['telefono'];
		$comentario = $_POST['comentario'];
		$cabeceras = "From: " . $correo . "\r\n" . "Reply-To: " . $correo . "\r\n" . "X-Mailer: PHP/" . phpversion();

		$action = mail('rejuan.castillo@gmail.com', 'Comentario a StrongSports', "Hola, soy ". $nombre . " " . $apellidos . " y me gustaria decirle a StrongSports: \n " . $comentario . "\n Gracias por su atención \n Tel: " . $telefono, $cabeceras);

		if($action) {
			echo "<script>alert('Eres perron');</script>";
		}
		else
		{
			echo "<script>alert('No eres perron')</script>";
		}

	}

?>
