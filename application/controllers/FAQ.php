<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQ extends CI_Controller {

	public function __construct()
 	{
     	parent::__construct();
      $this->load->model('M_faq');
			$this->load->model('M_header');
  }

	public function index(){
		$data['title']			= "F.A.Q || Sunset Bali Adventure";

		$data['list_faq'] = $this->M_faq->get_faq();
		$data['list_contact'] = $this->M_header->get_contact_us();
		$data['list_socmed'] = $this->M_header->get_socmed();

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header', $data);
		$this->load->view('v_faq', $data);
		$this->load->view('v_footer');
	}
}
