<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_header');
    }
    
	public function index(){

		$data['list_contact'] = $this->M_header->get_contact_us();
		$data['list_socmed'] = $this->M_header->get_socmed();
		$data['list_about'] = $this->M_about->get_about();
		$data['logo'] = $this->M_header->get_logo();

		$data['title']			= "About || Sunset Bali Adventure";

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header', $data);
		$this->load->view('v_about', $data);
		$this->load->view('v_footer');
    }
    
    public function baca($id){
        
    }
}