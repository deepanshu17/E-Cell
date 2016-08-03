<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('email');
		 $this->load->library('form_validation');
        $this->load->library('session');
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

	public function events() {
		$this->load->view('template/header');
		$this->load->view('events');
		$this->load->view('template/footer');
	}

	public function contact_us() {
		$this->load->view('template/header');
		$this->load->view('contact_us');
		$this->load->view('template/footer');
	}

	public function send_contact_mail() {
		$fullname = $this->input->post('name');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $this->email->from($email,$fullname);
        $this->email->to('ecell@iiit.ac.in');

        $this->email->subject($subject);
        $email_msg = $message;  
        $this->email->message($email_msg);

        $this->email->send();

        $this->email->print_debugger();
        redirect('contact-us', 'refresh');
	}

}
