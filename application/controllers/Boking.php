<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boking extends CI_Controller {

	public function __construct()
 	{
     	parent::__construct();
			$this->load->model('M_headfoot');
  }

	public function index(){
		$data['title']			= "Boking || Sunset Bali Adventure";

		$data['list_contact'] = $this->M_headfoot->get_contact_us();
		$data['list_socmed'] = $this->M_headfoot->get_socmed();
		$data['logo'] = $this->M_headfoot->get_logo();

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header', $data);
		$this->load->view('v_boking');
		$this->load->view('v_footer');
	}
}
