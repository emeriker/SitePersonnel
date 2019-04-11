<?php
class Contacter extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'Message' );
	}
	public function index() {
		$this->accueil ();
	}
	public function accueil() {
		$this->load->library('form_validation');
		$this->load->helper('form');
		
		$this->form_validation->set_rules('name', 'Name', 'required',array('required' => 'You must provide a %s.',));
		$this->form_validation->set_rules('email', 'Email', 'required',array('required' => 'You must provide a %s.',));
		$this->form_validation->set_rules('message', 'Message', 'required',array('required' => 'You must provide a %s.',));

		$this->load->view ( 'templates/header');
		if ($this->form_validation->run() == FALSE||$this->Message->SendEmail($this->input->post ( 'name' ),$this->input->post ( 'email' ),$this->input->post ( 'message'))==false)
		{
			$data['success']=" ";
			$this->load->view ( 'pages/contacter', $data );
		}
		else
		{
			$data['success']="The message was successfully sent!";
			$this->load->view ( 'pages/contacter', $data );
		}
		$this->load->view ( 'templates/footer', $data );


	}
}