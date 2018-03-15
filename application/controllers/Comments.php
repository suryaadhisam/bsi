<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments extends CI_Controller {

	public function index(){
		$data['title']			= "Comments || Sunset Bali Adventure";

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header');
		$this->load->view('v_comments');
		$this->load->view('v_footer');
	}
}
