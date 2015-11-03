<?php 

	/**
	* 
	*/
	class Mail extends PHPMailer
	{
		
		public function __construct($address = array()){
			$this->isSMTP();                                      // Set mailer to use SMTP
			$this->Host = 'mail.muysimple.org';  // Specify main and backup SMTP servers
			$this->SMTPAuth = true;                               // Enable SMTP authentication
			$this->Username = 'smtp@muysimple.org';                 // SMTP username
			$this->Password = 'Smt123*';                           // SMTP password
			$this->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$this->Port = 587;  
			$this->setFrom('info@muysimple.org', 'Muy Simple');
			foreach($address as $key => $val):
				$this->addAddress($val);
			endforeach;

			$this->isHTML(true); 

		}

	}

 ?>