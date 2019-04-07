<?php
class Message extends CI_Model {
	public function __construct() {

	}

	public function SendEmail($name, $email, $message){
		$email_subject = "Visitor from protfolio website FROM : " . $name;
		$email_body = "User Name : ".$name."\n".
				"User Email : ". $email."\n"."\n".
				"User Message : ".$message;
		

		return mail("emeric-lague@hotmail.com",$email_subject,$email_body);
	}
}