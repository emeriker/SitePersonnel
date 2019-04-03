<?php
class Bootstrap extends CI_Controller {

	public function __construct() {
		parent::__construct ();
	}
	public function index() {
		$this->bootstrap1();
	}
	public function bootstrap1() {
		$data ['title'] = 'Accueil';

		$this->load->view ( 'templates/header', $data );
		$this->load->view ( 'pages/bootstrapTuto/bootstrapTuto1', $data );
		$this->load->view ( 'templates/footer', $data );
	}
	
	public function bootstrap2() {
		$data ['title'] = 'Accueil';
	
		$this->load->view ( 'templates/header', $data );
		$this->load->view ( 'pages/bootstrapTuto/bootstrapTuto2', $data );
		$this->load->view ( 'templates/footer', $data );
	}
	
	public function bootstrap3() {
		$data ['title'] = 'Accueil';
	
		$this->load->view ( 'templates/header', $data );
		$this->load->view ( 'pages/bootstrapTuto/bootstrapTuto3', $data );
		$this->load->view ( 'templates/footer', $data );
	}
}
