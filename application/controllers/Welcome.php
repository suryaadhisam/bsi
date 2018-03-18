<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$data['title']			= "Sunset Bali Adventure";

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header2');
		$this->load->view('v_carousel');
		$this->load->view('v_home');
		$this->load->view('v_footer');

		// tes komen malu
	}
}
