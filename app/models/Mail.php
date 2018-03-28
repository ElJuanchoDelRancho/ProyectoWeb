<?php

	class Mail
	{
		
		private $mailCompany;

		public $mailUser;

		public $subject;

		public $message;

		public function __construct()
		{
			$this->mailCompany = 'rejuan.castillo@gmail.com';
		}

		public function receiveMail()
		{
			$cabeceras = "From: " . $this->mailUser . "\r\n" . "Reply-To: " . $this->mailUser . "\r\n" . "X-Mailer: PHP/" . phpversion();
			return mail($this->mailCompany, $this->subject, $this->message, $cabeceras);
		}

		public function sendMail()
		{
			$this->message = 'Tu correo ha sido enviado con éxito a StrongSports';
			$cabeceras = "From: " . $this->mailCompany . "\r\n" . "Reply-To: " . $this->mailCompany . "\r\n" . "X-Mailer: PHP/" . phpversion();
			return mail($this->mailUser, $this->subject, $this->message, $cabeceras);
		}

	}

?>