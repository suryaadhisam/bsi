<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facility extends CI_Controller {

	public function __construct()
 	{
     	parent::__construct();
			$this->load->model('M_header');
			$this->load->model('M_service');
			$this->load->model('M_home');
			$this->load->model('M_facility');
  }

	public function index(){
		$data['title']			= "Facility || Sunset Bali Adventure";

		$data['list_contact'] = $this->M_header->get_contact_us();
		$data['list_socmed'] = $this->M_header->get_socmed();
		$data['logo'] = $this->M_header->get_logo();
		$data['list_slider'] = $this->M_home->get_slider();
		$data['list_facility_detail'] = $this->M_facility->detailFacility($id);
		$data['list_photo_facility'] = $this->M_facility->photoFacility($id);

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header', $data);
		$this->load->view('v_facility_detail', $data);
		$this->load->view('v_footer');
	}

	public function detail_facility($id){
		$data['title']			= "Facility || Sunset Bali Adventure";

		$data['list_contact'] = $this->M_header->get_contact_us();
		$data['list_socmed'] = $this->M_header->get_socmed();
		$data['logo'] = $this->M_header->get_logo();
		$data['list_slider'] = $this->M_home->get_slider();
		$data['list_facility_detail'] = $this->M_facility->detailFacility($id);
		$data['list_photo_facility'] = $this->M_facility->photoFacility($id);

		$this->load->view('v_style', $data);
		$this->load->view('v_script');
		$this->load->view('v_header', $data);
		$this->load->view('v_facility_detail', $data);
		$this->load->view('v_footer');
	}
}
