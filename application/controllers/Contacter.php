<?php
class Contacter extends CI_Controller {

	public function __construct() {
		parent::__construct ();
	}
	public function index() {
		$this->accueil ();
	}
	public function accueil() {
		$data ['title'] = 'Contacter';

		$this->load->view ( 'templates/header', $data );
		$this->load->view ( 'pages/Contacter', $data );
		$this->load->view ( 'templates/footer', $data );
	}
}