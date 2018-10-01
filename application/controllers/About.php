<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_about');
        $this->load->model('M_headfoot');
    }

	public function index(){

		$data['list_contact'] = $this->M_headfoot->get_contact_us();
		$data['list_socmed'] = $this->M_headfoot->get_socmed();
		$data['list_about'] = $this->M_about->get_about();
		$data['logo'] = $this->M_headfoot->get_logo();
		$data['list_info'] = $this->M_headfoot->get_info();
		$data['list_services'] = $this->M_headfoot->get_services();

		$data['title']			= "About || Sunset Bali Adventure";

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header', $data);
		$this->load->view('v_about', $data);
		$this->load->view('v_footer');
	}
}
