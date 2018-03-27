<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		// if(!$this->session->userdata('email')){
		// 	redirect(base_url("admin/auth"));
		// }
		$this->load->library('form_validation');
		$this->load->model('m_service');

	}

	public function index(){
		
	}

	public function addService() {
		//validasi
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('name_services','Name service', 'required|max_length[255]');
		$this->form_validation->set_rules('path_img','Path Image','required|max_length[255]');
		$this->form_validation->set_rules('detail','Detail','required|max_length[255]');
		$this->form_validation->set_rules('facility','Facility','required|max_length[255]');
		$this->form_validation->set_rules('brg_personal','Brg personal','required|max_length[255]');

		if ($this->form_validation->run() == FALSE) {
			$result = [
				"status" => false,
				"data" => [],
				"message" => "Incorrect input",
				"errors" => $this->form_validation->error_array()
			];
		} 
		else {
			//add
			try {
				$this->db->trans_start();
				$data = array(
					'name_services' => $this->input->post('name_services'),
					'path_img' => $this->input->post('path_img'),
					'detail' => $this->input->post('detail'),
					'facility' => $this->input->post('facility'),
					'brg_personal' => $this->input->post('brg_personal'),
					'state' => 1
				);
				$this->m_service->addService($data);
				$this->db->trans_complete();

				$result = [
					"status" => true,
					"data" => [],
					"message" => "Successfully add services",
					"errors" => []
				];
			} catch(Excepion $err) {
				$this->db->trans_complete();
				$result = [
					"status" => false,
					"data" => [],
					"message" => "Failed add services",
					"errors" => array(
						"add service"=>"Failed add services"
					)
				];
			}
		}

		echo json_encode($result);
	}

	public function softDeleteService() {
		try {
			$this->db->trans_start();
			$this->m_service->softDeleteService($this->input->post('id_services'));
			$this->db->trans_complete();

			$result = [
				"status" => true,
				"data" => [],
				"message" => "Successfully delete service",
				"errors" => []
			];
		} catch(Excepion $err) {
			$this->db->trans_complete();
			$result = [
				"status" => false,
				"data" => [],
				"message" => "Failed delete service",
				"errors" => array(
					"delete service"=>"Failed delete service"
				)
			];
		}
		echo json_encode($result);
	}

	

	
	
}
