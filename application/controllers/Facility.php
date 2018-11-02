<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facility extends CI_Controller {

	public function __construct()
 	{
     	parent::__construct();
			$this->load->model('M_headfoot');
			$this->load->model('M_service');
			$this->load->model('M_home');
			$this->load->model('M_facility');
  }

	public function index(){
		$data['title']			= "Facility || Sunset Bali Adventure";

		$data['list_contact'] = $this->M_headfoot->get_contact_us();
		$data['list_socmed'] = $this->M_headfoot->get_socmed();
		$data['logo'] = $this->M_headfoot->get_logo();
		$data['list_slider'] = $this->M_home->get_slider();
		$data['list_facility_detail'] = $this->M_facility->detailFacility($id);
		$data['list_photo_facility'] = $this->M_facility->photoFacility($id);

		$data['list_info'] = $this->M_headfoot->get_info();
		$data['list_services'] = $this->M_headfoot->get_services();

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header', $data);
		$this->load->view('v_facility_detail', $data);
		$this->load->view('v_footer');
	}

	public function detail_facility($id){
		$data['title']			= "Facility || Sunset Bali Adventure";

		$data['list_contact'] = $this->M_headfoot->get_contact_us();
		$data['list_socmed'] = $this->M_headfoot->get_socmed();
		$data['logo'] = $this->M_headfoot->get_logo();
		$data['list_slider'] = $this->M_home->get_slider();
		$data['list_facility_detail'] = $this->M_facility->detailFacility($id);
		$data['list_photo_facility'] = $this->M_facility->photoFacility($id);

		$data['list_info'] = $this->M_headfoot->get_info();
		$data['list_services'] = $this->M_headfoot->get_services();

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header', $data);
		$this->load->view('v_facility_detail', $data);
		$this->load->view('v_footer');
	}

	
}
