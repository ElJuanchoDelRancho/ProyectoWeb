<?php
	
	class HomeController extends BaseController
	{

		public function __construct() { }

		public function Index()
		{
			$session = new Login();
			if (isset($_POST['en'])) {
				$cookie_name = "IDIOMA";
				$cookie_value = "en";
				setcookie($cookie_name, $cookie_value, time() + (86400 * 3)); // 86400 = 1 day
				$cookie_name = "googtrans";
				$cookie_value = "/es/en";
				setcookie($cookie_name, $cookie_value, time() + (86400 * 3)); // 86400 = 1 day
				header("Location: ./");
			}
			if (isset($_POST['es'])) {
			    $cookie_name = "IDIOMA";
				$cookie_value = "es";
				setcookie($cookie_name, $cookie_value, time() + (86400 * 3)); // 86400 = 1 day
				header("Location: ./");
			}
			Views::setTitle();
			Views::Render('home', 'main');
		}

		public function Idiom()
		{
			$session = new Login();
			require_once('../app/views/home/botones.php');
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
				$mail->mailFrom = $_POST['correo'];
				$mail->mailTo = $mail->mailCompany;
				$mail->subject = "Comentario a StrongSports";
				$mail->message = "Hola, soy " . $_POST['nombre'] . " " . $_POST['apellido'] . " y me gustaría decirle a StrongSports: \n" . $_POST['comentario'] . " \nGracias por su atención \nTel: " . $_POST['telefono'];
				$result = $mail->sendMail();
				$mail = new Mail();
				$mail->mailFrom = $mail->mailCompany;
				$mail->mailTo = $_POST['correo'];
				$mail->subject = "StrongSports - Correo de confirmación";
				$mail->message = "Hola, " . $_POST['nombre'] . " " . $_POST['apellido'] . " te enviamos este correo para confirmar que nos ha llegado tu mensaje \nTe responderemos lo más pronto posible \nStrongSports";
				$confirm = $mail->sendMail();
				$result = $result && $confirm;
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