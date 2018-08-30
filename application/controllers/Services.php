<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct()
 	{
     	parent::__construct();
			$this->load->model('M_header');
			$this->load->model('M_service');
			$this->load->model('M_home');
			$this->load->model('M_facility');
  }

	public function index(){
		$data['title']			= "Services || Sunset Bali Adventure";

		$data['list_contact'] = $this->M_header->get_contact_us();
		$data['list_socmed'] = $this->M_header->get_socmed();
		$data['logo'] = $this->M_header->get_logo();
		$data['list_service'] = $this->M_service->allService();
		$data['list_facility'] = $this->M_facility->get_facility();
		// var_dump($data['list_service']);

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header', $data);
		$this->load->view('v_services', $data);
		$this->load->view('v_footer');
	}

	function detail_service($id){
		$data['title']			= "Services || Sunset Bali Adventure";

		$data['list_contact'] = $this->M_header->get_contact_us();
		$data['list_socmed'] = $this->M_header->get_socmed();
		$data['logo'] = $this->M_header->get_logo();
		$data['list_slider'] = $this->M_home->get_slider();
		$data['list_service_detail'] = $this->M_service->detailService($id);
		$data['list_photo_service'] = $this->M_service->photoService($id);

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header', $data);
		$this->load->view('v_service_detail', $data);
		$this->load->view('v_footer');
	}
}
