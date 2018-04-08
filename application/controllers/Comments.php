<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments extends CI_Controller {

	public function __construct()
 	{
     	parent::__construct();
      $this->load->model('M_comments');
  }

	public function index(){
		$data['title']			= "Comments || Sunset Bali Adventure";

		$data['list_comments'] = $this->M_comments->get_comments();

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header');
		$this->load->view('v_comments', $data);
		$this->load->view('v_footer');
	}
}
