<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct()
 	{
     	parent::__construct();
			$this->load->model('M_headfoot');
			$this->load->model('M_service');
			$this->load->model('M_home');
			$this->load->model('M_facility');
  }

	public function index(){
		$data['title']			= "Services || Sunset Bali Adventure";

		$data['list_contact'] = $this->M_headfoot->get_contact_us();
		$data['list_socmed'] = $this->M_headfoot->get_socmed();
		$data['logo'] = $this->M_headfoot->get_logo();
		$data['list_service'] = $this->M_service->allService();
		$data['list_facility'] = $this->M_facility->get_facility();

		$data['list_info'] = $this->M_headfoot->get_info();
		$data['list_services'] = $this->M_headfoot->get_services();

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header', $data);
		$this->load->view('v_services', $data);
		$this->load->view('v_footer');
	}

	function detail_service($id){
		$data['list_contact'] = $this->M_headfoot->get_contact_us();
		$data['list_socmed'] = $this->M_headfoot->get_socmed();
		$data['logo'] = $this->M_headfoot->get_logo();
		$data['list_slider'] = $this->M_home->get_slider();
		$data['list_service_detail'] = $this->M_service->detailService($id);
		$data['list_photo_service'] = $this->M_service->photoService($id);

		$data['list_info'] = $this->M_headfoot->get_info();
		$data['list_services'] = $this->M_headfoot->get_services();

		foreach($data['list_service_detail'] as $result) {
				$titile =  $result->varian;
		}
		$data['title']			= "$titile || Sunset Bali Adventure";

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header', $data);
		$this->load->view('v_service_detail', $data);
		$this->load->view('v_footer');
	}
}
