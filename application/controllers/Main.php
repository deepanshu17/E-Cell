<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
		$this->load->view('template/header');
		$this->load->view('main');
		$this->load->view('template/footer');
	}

	public function about_us() {
		$this->load->view('template/header');
		$this->load->view('about-us');
		$this->load->view('template/footer');	
	}

	public function associates() {
		$this->load->view('template/header');
		$this->load->view('associates');
		$this->load->view('template/footer');	
	}

	public function contact_us() {
		$this->load->view('template/header');
		$this->load->view('contact_us');
		$this->load->view('template/footer');
	}
}
