<?php
class Message extends CI_Model {
	public function __construct() {
		$this->load->library('email');
	}

	public function SendEmail($name, $email, $message){
		$email_subject = "Visitor from protfolio website FROM : " . $name;
		$email_body = "User Name : ".$name."\n".
				"User Email : ". $email."\n"."\n".
				"User Message : ".$message;
		
		$config['protocol']    = 'tls';
		$config['smtp_host']    = 'smtp-mail.outlook.com';
		$config['smtp_port']    = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user']    = 'emeric-lague@hotmail.com';
		$config['smtp_pass']    = 'Ybrik123456';
		$config['validation'] = TRUE;
		$this->email->initialize($config);
		
		$this->email->from($email, $name);
		$this->email->to("emeric-lague@hotmail.com");
		
		$this->email->subject($email_subject);
		$this->email->message($email_body);


		return $this->email->send();
	}
}