<?php
if(isset($_POST['correo']))
{
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$comentario=$_POST['comment'];
	$asunto="Comentario pagina";
	$servidor='rejuan.castillo@gmail.com';
	$mensaje="Tu comentario fue enviado";
	$opinion=$nombre." con telefono: ".$telefono." y correo: ".$correo." te ha enviado el siguiente mensaje: ".$comentario;
	if(mail($servidor, $asunto, $opinion, "From: ".$correo))
	{
		echo "<script>alert('Correo enviado al servidor');</script>";
		if(mail($correo, $asunto, $mensaje, "From: ".$correo))
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
	
	
}
?>
