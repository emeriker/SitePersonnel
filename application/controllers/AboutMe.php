<?php
class AboutMe extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		// load MY_Controller (qui est dans le core)
	}
	public function index() {
		$this->AboutMe();
	}
	public function AboutMe() {

		$this->load->view ( 'templates/header');
		$this->load->view ( 'pages/aboutMe');
		$this->load->view ( 'templates/footer');
	}
}
