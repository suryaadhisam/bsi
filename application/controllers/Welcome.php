<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
 	{
     	parent::__construct();
      $this->load->model('M_home');
			$this->load->model('M_header');
  }

	public function index(){
		$data['title']			= "Sunset Bali Adventure";


		$data['list_contact'] = $this->M_header->get_contact_us();
		$data['list_socmed'] = $this->M_header->get_socmed();

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header', $data);
		$this->load->view('v_home', $data);
		$this->load->view('v_footer');

		// tes komen malu
	}
}
