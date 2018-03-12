<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view('v_style');
		$this->load->view('v_script');
		$this->load->view('v_header');
		$this->load->view('v_home');
		$this->load->view('v_footer');
	}
}
