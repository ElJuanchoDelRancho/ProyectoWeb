<?php
	
	class HomeController extends BaseController
	{

		public function __construct() { }

		public function Index()
		{
			$session = new Login();
			Views::SetTitle();
			Views::Render('home', 'main');
		}

		public function Contact()
		{
			$session = new Login();

			if(isset($_POST['correo']))
			{
				$mail = new Mail();
				$mail->mailUser = $_POST['correo'];
				$mail->subject = "Comentario a StrongSports";
				$mail->message = "Hola, soy " . $_POST['nombre'] . " " . $_POST['apellido'] . " y me gustaría decirle a StrongSports: \n" . $_POST['comentario'] . " \nGracias por su atención \nTel: " . $_POST['telefono'];
				$result = $mail->receiveMail();
				unset($_POST['correo']);

				/*if($result == true)
					echo "<script>alert('Eres perron');</script>";
				else
					echo "<script>alert('No eres perron')</script>";
				self::Redirect('home', 'contact');*/
			}
			
			Views::SetTitle('Contacto');
			Views::Render('home', 'contact');
		}

	}

?>