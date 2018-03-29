<?php
	
	class HomeController extends BaseController
	{

		public function __construct() { }

		public function Index()
		{
			$session = new Login();
			Views::setTitle();
			Views::Render('home', 'main');
		}

		public function Contact()
		{
			$session = new Login();
			$modal = 0;
			$modalHeader = '';
			$modalBody = '';

			if(isset($_POST['correo']))
			{
				$mail = new Mail();
				$mail->mailUser = $_POST['correo'];
				$mail->subject = "Comentario a StrongSports";
				$mail->message = "Hola, soy " . $_POST['nombre'] . " " . $_POST['apellido'] . " y me gustaría decirle a StrongSports: \n" . $_POST['comentario'] . " \nGracias por su atención \nTel: " . $_POST['telefono'];
				$result = $mail->receiveMail();
				unset($_POST['correo']);
				$modal = 1;
				if($result == true)
				{
					$modalHeader = "Correo enviado!";
					$modalBody = "<p>Tu correo ha sido enviado con éxito a StrongSports!</p><p>Por lo pronto se te enviará un correo de confirmación y te responderemos lo más rápido posible.</p>";
				}
				else
				{
					$modalHeader = "Oooops! Ocurrió un error :(";
					$modalBody = "<p>Tu correo no ha podido ser enviado.</p><p>Por favor, vuelve a intentarlo más tarde.</p>";
				}
			}

			Views::setTitle('Contacto');
			Views::setData('modal', $modal);
			Views::setData('modalHeader', $modalHeader);
			Views::setData('modalBody', $modalBody);
			Views::Render('home', 'contact');
		}

	}

?>