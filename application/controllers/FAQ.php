<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQ extends CI_Controller {

	public function __construct()
 	{
     	parent::__construct();
      $this->load->model('M_faq');
			$this->load->model('M_headfoot');
  }

	public function index(){
		$data['title']			= "F.A.Q || Sunset Bali Adventure";

		$data['list_faq'] = $this->M_faq->get_faq();
		$data['list_contact'] = $this->M_headfoot->get_contact_us();
		$data['list_socmed'] = $this->M_headfoot->get_socmed();
		$data['logo'] = $this->M_headfoot->get_logo();

		$data['list_info'] = $this->M_headfoot->get_info();
		$data['list_services'] = $this->M_headfoot->get_services();

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header', $data);
		$this->load->view('v_faq', $data);
		$this->load->view('v_footer');
	}
}
