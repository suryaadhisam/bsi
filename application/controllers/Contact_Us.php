<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_Us extends CI_Controller {

	public function index(){
		$data['title']			= "Contact Us || Sunset Bali Adventure";

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header');
		$this->load->view('v_contact_us');
		$this->load->view('v_footer');
	}
}
