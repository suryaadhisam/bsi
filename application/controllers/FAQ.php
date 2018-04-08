<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQ extends CI_Controller {

	public function __construct()
 	{
     	parent::__construct();
      $this->load->model('M_faq');
  }

	public function index(){
		$data['title']			= "F.A.Q || Sunset Bali Adventure";

		$data['list_faq'] = $this->M_faq->get_faq();

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header');
		$this->load->view('v_faq', $data);
		$this->load->view('v_footer');
	}
}
