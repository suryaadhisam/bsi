<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function __construct()
 	{
     	parent::__construct();
			$this->load->model('M_headfoot');
			$this->load->model('M_gallery');
  }

	public function index(){

		$data['list_contact'] = $this->M_headfoot->get_contact_us();
		$data['list_socmed'] = $this->M_headfoot->get_socmed();
		$data['logo'] = $this->M_headfoot->get_logo();
		$data['list_photo'] = $this->M_gallery->get_photo();

		$data['title']			= "About || Sunset Bali Adventure";

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header', $data);
		$this->load->view('v_gallery', $data);
		$this->load->view('v_footer');
	}
}
