<?php 
	
	require "container/ServiceContainer.php";
	require "Mail.php";

	class MailProvider1 extends ServiceContainer implements Mail
	{
		
		function __construct()
		{
			parent::__construct();

			$this->mail = $this->send();
		}

		public function send($email="") {

			$this->register();
			
			return $this->mail;
		}

		public function subscribe($email, $name = "Kumar", $message, $subject) {

			$this->mail->setFrom(FROM_EMAIL, NAME_OF_USRE);
			$this->mail->addAddress($email, $name);
			$this->mail->isHTML(true);                             
			$this->mail->Subject = $subject;
			$this->mail->Body    = $message;
			try {
			    return $this->mail->send();
			} catch (Exception $e) {
			    return  "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		}
	}

?>