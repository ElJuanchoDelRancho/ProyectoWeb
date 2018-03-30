<?php

	class Mail
	{

		public $mailCompany;
		
		public $mailTo;

		public $mailFrom;

		public $subject;

		public $message;

		public function __construct()
		{
			$this->mailCompany = 'rejuan.castillo@gmail.com';
		}

		public function sendMail()
		{
			$headers = "From: " . $this->mailFrom . "\r\n" . "Reply-To: " . $this->mailFrom . "\r\n" . "X-Mailer: PHP/" . phpversion();
			return mail($this->mailTo, $this->subject, $this->message, $headers);
		}

		/*public function sendMail()
		{
			$this->message = "Tu correo ha sido enviado con éxito a StrongSports";
		    $headers = "MIME-Version: 1.0\r\n";
            $headers .= "From: " . $this->mailCompany . "\r\n";
            $headers .= "Reply-To: " . $this->mailCompany . "\r\n";
            $headers .= "Content-type: text/html;charset=utf-8 ";
            $headers .= "X-Priority: 3";
            $headers .= "X-Mailer: smail-PHP " . phpversion();
			return mail($this->mailUser, $this->subject, $this->message, $headers);
		}*/

	}

?>