<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ .'../../config.php';

require_once __DIR__ .'../../vendor/autoload.php';


	class ServiceContainer
	{
		
		protected $mail;

		function __construct()
		{
			$this->mail = new PHPMailer(true);

		}

		public function register() {
			$this->mail->SMTPDebug = SMTP::DEBUG_SERVER; 
		    $this->mail->isSMTP();                                            
		    $this->mail->Host       = HOST_NAME;                    
		    $this->mail->SMTPAuth   = SMTP_AUTH;                                   
		    $this->mail->Username   = USERNAME;                     
		    $this->mail->Password   = PASSWORD;                               
		    $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
		    $this->mail->Port       = 465;       
		    return $this->mail;              
		}
	}


?>