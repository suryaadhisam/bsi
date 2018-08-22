<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments extends CI_Controller {

	public function __construct()
 	{
     	parent::__construct();
      $this->load->model('M_comments');
			$this->load->model('M_header');
  }

	public function index(){
		$data['title']			= "Comments || Sunset Bali Adventure";

		$data['list_comments'] = $this->M_comments->get_comments();
		$data['list_contact'] = $this->M_header->get_contact_us();
		$data['list_socmed'] = $this->M_header->get_socmed();
		$data['logo'] = $this->M_header->get_logo();

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header', $data);
		$this->load->view('v_comments', $data);
		$this->load->view('v_footer');
	}
}
