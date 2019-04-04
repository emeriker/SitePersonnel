<?php
class Contacter extends CI_Controller {

	public function __construct() {
		parent::__construct ();
	}
	public function index() {
		$this->accueil ();
	}
	public function accueil() {
		$this->load->library('form_validation');
		$this->load->helper('form');
		
		$data ['title'] = 'Contacter';
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		$this->load->view ( 'templates/header', $data );
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view ( 'pages/Contacter', $data );
		}
		else
		{
			$this->load->view('success/email_envoyer');
		}
		$this->load->view ( 'templates/footer', $data );


	}
}