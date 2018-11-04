<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
 	{
     	parent::__construct();
      $this->load->model('M_home');
			$this->load->model('M_headfoot');
			$this->load->model('M_comments');
			$this->load->model('M_facility');
			$this->load->model('M_flyer');
	}

	public function index(){
		$data['title']			= "Sunset Bali Adventure";


		$data['list_contact'] = $this->M_headfoot->get_contact_us();
		$data['list_socmed'] = $this->M_headfoot->get_socmed();
		$data['logo'] = $this->M_headfoot->get_logo();
		$data['list_slider'] = $this->M_home->get_slider();
		$data['list_services'] = $this->M_home->get_services();
		$data['list_testimoni'] = $this->M_comments->get_comments();
		$data['list_facility'] = $this->M_facility->get_facility();
		$data['list_info'] = $this->M_headfoot->get_info();
		$data['list_flyer'] = $this->M_flyer->getListFlyer();

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header', $data);
		$this->load->view('v_home', $data);
		$this->load->view('v_footer', $data);

		// tes komen malu
	}

	public function cek_facility(){
		$id_fac = $this->input->post('id_facility');
		$id_fac = (int)$id_fac;
		$data = $this->M_facility->cekFacility($id_fac);
		$data = (int)$data;
		echo $data;
		// if ($data == 1) {
		// 	echo $data;
		// } else {
		// 	$message = "Sorry detail facilities are not available";
		// 	echo $message;
		// }
		// echo "lol";
		
	}
}
